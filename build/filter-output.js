#!/usr/local/bin/node --es_staging
"use strict";

let fs       = require("fs");
let process  = require("process");
let fileName = process.argv[2];

/** Whether to sort the output case-insensitively */
let caseless = true;

const TermList = {
	keywords: {},
	rolloutControls: {},
	functions: {},
	mxsClasses: {},
	maxClasses: {},
	maxSuperClasses: {},
	coreInterfaces: {},
	objectSets: {},
	structDefs: {},
	reservedGlobals: {}
};


class Term{
	constructor(name, builtIn, type, formatted, properties){
		this.name       = name;
		this.builtIn    = !!builtIn;
		this.type       = type;
		this.formatted  = formatted;
		this.properties = this.parseProperties(properties || []);
	}


	parseProperties(input){
		
		/** Not a string, so assume it's some object we can handle instead. */
		if(!input || ("string" !== typeof input && String !== input.constructor))
			return input;
		
		let result = [];
		let lines  = input.trim().split(/\n+/g);
		for(let l of lines){
			let m = l.match(/^\s*(\w+):<([^>]+)>;\s*(.*?)[,)]?\s*$/);
			result.push(new TermProperty(m[1], m[2], m[3]));
		}

		return result;
	}


	toString(){
		let propsList = this.properties && this.properties.length ? ("(\n  " + this.properties.join(",\n  ") + ")") : "";
		let isConst   = this.builtIn ? "const " : "";
		let formatted = (this.formatted || this.name);
		return this.name + " (" + isConst + this.type + "): " + (propsList ? formatted.replace(/\($/, "") : "") + propsList;
	}
}


class TermProperty{
	constructor(name, type, metadata){
		this.name = name;
		this.type = type;
		this.meta = metadata;
	}
	
	toString(){
		return `${this.name}:<${this.type}>; ${this.meta}`;
	}
}



/** Read the contents of the given file */
if(fileName){
	let input = fs.readFileSync(fileName).toString();
	
	/** Drop operators misinterpreted as functions */
	input = input.replace(/(?:\n|^)[%?].*$/gmi, "");
	
	/** Strip newlines from any string values that might've been picked up */
	input = input.replace(/StringStream:"([^"]+)"/mgi, (input, match) => match.replace(/\n+/g, " "));
	
	
	/** Declare the arrays we'll be piling each generated Term instance into */
	let terms     = [];
	let termNames = [];
	
	/** Match each listed term */
	let m, match  = /(?:^|\n)(\w+)\s+\((const)?\s*([^\)]+)\):\s+([^\n]*)((?:\n\x20{2}[^\n]+)*)/gmi;
	while(m = match.exec(input)){
		m.shift();
		let term  = new Term(...m);
		
		terms.push(term);
		termNames.push(term.name);
	}
	
	if(caseless)
		termNames = termNames.sort((A, B) => {
			let a = A.toLowerCase();
			let b = B.toLowerCase();
			if(a < b) return -1;
			if(a > b) return 1;
			return 0;
		});
	
	console.log(termNames.join("\n"));
}


/** Couldn't find/open designated filename */
else{
	console.error(`Usage: ${process.argv[1]} [filename.txt]`);
	process.exit(1);
}
