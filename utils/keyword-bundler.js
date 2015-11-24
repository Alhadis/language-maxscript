#!/usr/local/bin/node --es_staging
"use strict";

let fs          = require("fs");
let process     = require("process");
let grammarFile = process.argv[2];
let scopeName   = process.argv[3];


/** Load grammar file */
let file = fs.readFileSync(grammarFile).toString();


/** Collect standard input */
let input = "";
process.stdin.setEncoding("utf8");
process.stdin.on("readable", e => {
	var chunk = process.stdin.read();
	if(null !== chunk)
		input += chunk;
});


/** We've finished collecting input: now begin processing it. */
process.stdin.on("end", () => {
	input = input.trim().replace(/\n+/g, "|");
	
	let target  = scopeName.replace(/\./g, "\\.");
	let match   = new RegExp(`(^|\\n)(\\t+)(#[^\\n]*\\[make\\s+${target}\\s*\\]\\s*:?\\s*([^\\n]+)\\n\\2\\{[^\\x00]*?["']match["']\\s*:\\s*)("[^"]*"|'[^']*')([^\\x00]*?\\n\\2\\})`, "gmi")
	
	let modifiedData = file.replace(match, function(){
		return [].slice.call(arguments, 1, 4).join("") + '"' + arguments[4].replace(/%/, input) + '"' + arguments[6];
	});
	
	fs.writeFileSync(grammarFile, modifiedData);
});
