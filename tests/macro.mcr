MacroScript whitePaint
	enabledIn:	#("MAX", "VIZ")
	category:	"Medit Tools"
	internalcategory: "Medit Tools"
	ButtonText:	"White Paint Palette"
	tooltip: 	"White Paint Palette"
(
	group
	button 
	clearListener ();	addListController()
	clearListener();	addListController ()
	
	shapes[8]
	objects

	fn something = 
	
	
	local verbatim = @"Everything's gonna be alright!
	I promise.
	-- Nobody Ever";
	
	angle lightDirection 
	
	with redraw off(
	)
	
	-- Fills the Material Editor palette with InkNPaint Shaders
	on Execute do(
		
		for i in 1 to meditMaterials.count do(
			prefixId = i as string
			if(prefixId.count == 1) then prefixId = "0" + prefixId
			meditMaterials[i] = InkNPaint paint_color:white min_ink_width:0.6 name:(prefixId + " - Default")
		)
	)
)
