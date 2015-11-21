MacroScript CtrlC
	category:"Overrides"
	buttonText:"Chamfer"
	tooltip:"Chamfer"
(

	on Execute do(
		local version	= maxVersion();
		local obj		= Filters.GetModOrObj();
		local so		= subobjectlevel;
		local inSOL		= (so != undefined and so > 0)
		
		
		-- Editable Spline
		if(Filters.Is_EditSpline()) then(
			-- Only valid at Vertex level
			if(so == 1) then macros.run "Editable Spline Object" "ESpline_VChamfer"
		)


		-- Editable Polygon
		else if(Filters.Is_EPoly()) then(
			if(inSOL) then(
				max modify mode
				
				-- UPDATE 28/08/2009: Reset ChamferSegments to 1 (3DS Max 2008+ only)
				if(version[1] > 9000) then
					obj.edgeChamferSegments =	1;
				
				macroName = case so of(
					1:			"EPoly_Chamfer"
					2:			"EPoly_Chamfer"
					3:			"EPoly_Cap"
					default:	"EPoly_Inset"
				)
				macros.run "Editable Polygon Object" macroName
			)
		)


		-- Editable Mesh
		else if(Filters.Is_EditMesh()) then(
			-- Valid only at Edge or Vertex levels
			if(so == 1 or so == 2) then(
				max modify mode
				macroName = if(so == 1) then "EMesh_VChamfer" else "EMesh_EChamfer"
				macros.run "Editable Mesh Object" macroName
			)
		)
		
		
		-- If we're not working at subobject level, run the usual shortcut instead.
		else macros.run "Lights and Cameras" "Camera_CreateFromView"

	)
)