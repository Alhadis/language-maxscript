# MAXScript language support in Atom

This package adds support for [MAXScript](http://www.autodesk.com/3dsmax-maxscript-2012-enu), the built-in scripting language for [Autodesk® 3ds Max®](http://www.autodesk.com.au/products/3ds-max/overview). If you have no idea what either of those are, you needn't bother installing this.

![Up and Atom](https://raw.githubusercontent.com/Alhadis/language-maxscript/master/preview.png)


Contributing
------------
This was more work than I thought it would be, so if anything appears even remotely whack, *please* [file an issue](https://github.com/Alhadis/language-maxscript/issues/new). Seriously.


Usage
-----
Some users may wish to replicate the same look-and-feel of 3DS Max's built-in editor. In which case, they can use [this](mxs-scintilla.less) as a starting-point:


```less
/** MAXScript: MXS_Scintilla clone */
.maxscript{
	
	.comment{
		color: #007f00;
	}
	
	.numeric{
		color: #007f7f;
	}
	
	.string{
		color: #7f007f;
		
		&.verbatim{
			color: #007f00;
			background-color: #e0ffe0;
		}
		
		&.invalid{
			color: #000;
			background-color: #e0c0e0;
		}
	}
	
	.operator{
		color: #000;
		font-weight: bold;
	}
	
	.function{
		color: #3060a0;
	}
	
	.keyword,
	.storage.type.function,
	.storage.modifier.function{
		color: #00007f;
		font-weight: bold;
	}
	
	.rollout-control{
		color: #000;
		font-weight: bold;
	}
	
	.objectset{
		color: #d0b080;
		font-style: italic;
	}
}
```
