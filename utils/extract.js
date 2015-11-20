#!/usr/local/bin/node --es_staging
"use strict";

/** Load core Node.JS modules */
let fs       = require("fs");
let process  = require("process");
let Util     = require("util");


/** Categories of MAXScript variables */
const TYPE_VARIABLE    = 0;
const TYPE_CLASS       = 1;
const TYPE_SUPERCLASS  = 2;
const TYPE_INTERFACE   = 3;
const TYPE_OBJECTSET   = 4;
const TYPE_STRUCTDEF   = 5;
const TYPE_FUNCTION    = 6;


/** How a variable/term is initialised in 3DS Max */
const TERM_TYPE_NORMAL = 0;
const TERM_TYPE_CONST  = 1; /** Unchangeable value */
const TERM_TYPE_SYSTEM = 2; /** System variable */



/**
 * Represents a single name extracted from MAXScript.
 */
class Term{
	
	/**
	 * Create a new term instance.
	 *
	 * @param {String} name       - Term's variable name, as you'd enter it in MAXScript
	 * @param {String} builtIn    - Tag denoting if variable is system-set ("system") or unchangeable ("const"). False otherwise.
	 * @param {String} type       - Name of the variable's constructor class
	 * @param {String} formatted  - A formatted representation of the value
	 * @param {String} properties - An indented, newline-separated list of properties. Used for StructDef objects only.
	 * @constructor
	 */
	constructor(name, builtIn, type, formatted, properties){
		this.name       = name;
		this.builtIn    = builtIn || false;
		this.type       = type;
		this.formatted  = formatted;
		this.properties = this.parseProperties(properties || []);
		
		/** Resolve the instance's TYPE_* constant */
		let termType;
		switch((this.builtIn || "").toLowerCase()){
			case "const":  { termType = TERM_TYPE_CONST;  break; }
			case "system": { termType = TERM_TYPE_SYSTEM; break; }
			default:       { termType = TERM_TYPE_NORMAL; break; }
		}
		
		/** #StructDefs won't be marked as "system" per se, so we need to check their members instead */
		if(TERM_TYPE_SYSTEM !== termType && this.properties.length)
			for(let p of this.properties)
				if(p.type === "systemGlobal"){
					termType = TERM_TYPE_SYSTEM;
					break;
				}
		
		this.termType = termType;
	}


	/**
	 * Parse the contents of the term's properties block, if supplied.
	 *
	 * Internal method called from the class's constructor.
	 *
	 * @param {String|Array} input - Properties data
	 * @return {Array}
	 */
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


	/**
	 * Return a serialised representation of the term in the same style provided by MAXScript.
	 * @return {String}
	 */
	toString(){
		let propsList = this.properties && this.properties.length ? ("(\n  " + this.properties.join(",\n  ") + ")") : "";
		let isConst   = this.builtIn ? "const " : "";
		let formatted = (this.formatted || this.name);
		return this.name + " (" + isConst + this.type + "): " + (propsList ? formatted.replace(/\($/, "") : "") + propsList;
	}
}





/**
 * Represents a single subproperty of an existing Term (generally a StructDef).
 */
class TermProperty{
	
	/**
	 * Create a new property instance.
	 *
	 * @param {String} name - Property's variable name; how it's accessed in MAXScript
	 * @param {String} type - Indication of what type of property this is. Not a reference to a class constructor.
	 * @param {String} meta - Any additional information that was found at the end of the property's definition.
	 * @constructor
	 */
	constructor(name, type, meta){
		this.name = name;
		this.type = type;
		this.meta = meta;
	}
	
	/**
	 * Return a string-representation of the property in the same format presented by MAXScript.
	 * @return {String}
	 */
	toString(){
		return `${this.name}:<${this.type}>; ${this.meta}`;
	}
}



/**
 * Primary class for managing to extraction, arrangement, and interpretation of MAXScript names.
 */
class TermReader{
	
	/**
	 * Create a new reader instance.
	 *
	 * @param {String}  filename - Path to the MAXScript name-dump
	 * @param {Boolean} caseless - Whether to sort output case-insensitively
	 * @constructor
	 */
	constructor(fileName, caseless){
		this.caseless = !!caseless;
		
		/** Read the contents of the given file */
		if(fileName){
			
			let input = fs.readFileSync(fileName).toString()
			
				/** Drop operators misinterpreted as functions */
				.replace(/(?:\n|^)[%?].*$/gmi, "")
			
			
				/** Strip newlines from any string values that might've been picked up */
				.replace(/StringStream:"([^"]+)"/mgi, (input, match) => match.replace(/\n+/g, " "))
				
			
				/** I shouldn't, but yeah, I did. NFI what the hell it's doing in MAXScript's dump, though */
				.replace(/\nYou_Shouldn_t_See_this_(.*)$/gmi, "");
			
			
			
			/** Declare the arrays we'll be piling each generated Term instance into */
			let terms     = [];
			
			/** Match each listed term */
			let m, match  = /(?:^|\n)(\w+)\s+\((const|system)?\s*([^\)]+)\):\s+([^\n]*)((?:\n\x20{2}[^\n]+)*)/gmi;
			while(m = match.exec(input)){
				m.shift();
				let term  = new Term(...m);
				terms.push(term);
			}
			
			this.terms = terms;
		}


		/** Couldn't find/open designated filename */
		else{
			console.error(`Usage: ${process.argv[1]} [filename.txt]`);
			process.exit(1);
		}
	}
	
	
	
	/**
	 * Return the values of a named property for each collected term.
	 *
	 * For instance, to return a list of each term's variable type, you might call reader.list("type");
	 * If omitted, the function defaults to listing each term's name instead.
	 *
	 * An optional callback can be passed as the second argument that alters the value passed to the
	 * returned array (that is, the term's original property remains unmodified). If the function returns
	 * an explicit value of FALSE or NULL, no value is added to the array.
	 *
	 * @param {String}   property - Name of the Term instance's property to collect the value of
	 * @param {Function} callback - Optional callback that filters the property's result
	 * @return {Array}
	 */
	list(property, callback){
		let output = [];
		property   = property || "name";
		
		for(let i of this.terms){
			let value = i[property];
			
			/** If given a callback, run it on the property's value. */
			if(callback)
				value = callback(value, i);
			
			/** Append this value to the returned list if it's not false/null */
			if(false !== value && null !== value)
				output.push(value);
		}
		
		return this.sort(output);
	}
	
	
	
	/**
	 * Alphabetise an array of strings
	 *
	 * @param {Array} input
	 * @return {Array}
	 */
	sort(input){
		if(this.caseless) return input.sort((A, B) => {
			let a = this.caseless ? A.toLowerCase() : A;
			let b = this.caseless ? B.toLowerCase() : B;
			if(a < b) return -1;
			if(a > b) return 1;
			return 0;
		});
		else return input.sort();
	}
	
	
	/**
	 * Return a list of terms whose type/termType properties match the given arguments.
	 *
	 * @param {Number} type     - TYPE_* constant
	 * @param {Number} termType - TERM_TYPE_* constant
	 * @return {Array}
	 */
	listByType(type, termType){
		type      = parseInt(type)     || TYPE_VARIABLE;
		termType  = parseInt(termType) || TERM_TYPE_NORMAL;
		let terms = [];
		
		let classesByKeyword = {
			[TYPE_CLASS]:        ["MAXClass", "Class"],
			[TYPE_SUPERCLASS]:   ["MAXSuperClass"],
			[TYPE_INTERFACE]:    ["Interface"],
			[TYPE_OBJECTSET]:    ["ObjectSet"],
			[TYPE_STRUCTDEF]:    ["StructDef"],
			[TYPE_FUNCTION]:     ["Generic", "MappedGeneric", "MAXScriptFunction", "NodeGeneric", "Primitive"],
		};
		
		let shouldAdd = term => classesByKeyword[type].indexOf(term.type) > -1;
		
		/** Anything not assigned to a keyword type above is considered a generic "variable". */
		if(TYPE_VARIABLE === type){
			let names  = Object.keys(classesByKeyword).map(v => classesByKeyword[v].join("|")).join("|");
			let rNames = RegExp(`^\s*(${names})\s*$`, "i");
			shouldAdd  = term => false === rNames.test(term.type);
		}

		/** Collect each defined variable name */
		for(let t of this.terms)
			shouldAdd(t) && t.termType === termType && terms.push(t.name);
		
		/** Alphabetise and return that shit */
		return this.sort(terms);
	}
}


/** Let's get this happening */
let reader  = new TermReader(process.argv[2], true);
let list    = reader.listByType(
	eval("TYPE_"      + (process.argv[3] || "VARIABLE").toUpperCase().replace(/\W+/g, "_")),
	eval("TERM_TYPE_" + (process.argv[4] || "NORMAL").toUpperCase().replace(/\W+/g, "_"))
);
console.log(list.join("\n"));
