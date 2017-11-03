# MAXScript language support in Atom

This package adds support for [MAXScript][1], the built-in scripting language for [Autodesk® 3ds Max®][2].
If you have no idea what either of those are, you needn't bother installing this.

![Up and Atom](https://raw.githubusercontent.com/Alhadis/language-maxscript/master/preview.png)


Contributing
------------
This was more work than I thought it would be, so if anything appears even remotely whack, *please* [file an issue][3]. Seriously.


Usage
-----
Some users may wish to replicate the same look-and-feel of 3DS Max's built-in editor.
In which case, they can use this as a starting-point. Add the following to [your stylesheet][4]:

~~~less
/* MAXScript: MXS_Scintilla clone */
.syntax--maxscript{
	
	.syntax--comment{
		color: #007f00;
	}
	
	.syntax--numeric{
		color: #007f7f;
	}
	
	.syntax--string{
		color: #7f007f;
		
		&.syntax--verbatim{
			color: #007f00;
			background-color: #e0ffe0;
		}
		
		&.syntax--invalid{
			color: #000;
			background-color: #e0c0e0;
		}
	}
	
	.syntax--operator{
		color: #000;
		font-weight: bold;
	}
	
	.syntax--function{
		color: #3060a0;
	}
	
	.syntax--keyword,
	.syntax--storage.syntax--type.syntax--function,
	.syntax--storage.syntax--modifier.syntax--function{
		color: #00007f;
		font-weight: bold;
	}
	
	.syntax--rollout-control{
		color: #000;
		font-weight: bold;
	}
	
	.syntax--objectset{
		color: #d0b080;
		font-style: italic;
	}
}
~~~

[1]: http://www.autodesk.com/3dsmax-maxscript-2012-enu
[2]: http://www.autodesk.com.au/products/3ds-max/overview
[3]: https://github.com/Alhadis/language-maxscript/issues/new
[4]: http://flight-manual.atom.io/using-atom/sections/basic-customization/#style-tweaks
