/**
 * PolyMeshTools
 *
 * Contains advanced functions for technical polymesh manipulation.
 * Functions that are too mesh-specific and nitty-gritty belong here.
 */

function singleLine a b keyword:#optional = a + b

function starField count extent:[200,200,200] pos:[0,0,0] = (
	local f = pos - extent / 2
	for i = 1 to count do
		sphere name: "Star" radius:(random 0.1 2.0) position:(random f t) segs:4 smooth:false
)


--	Selects the vertices that match the specified flag bit.
--	*	Primarily intended for feedback during code development.
global selectByFlag;
function selectByFlag obj flag level:#Vertex = (
	local result	=	#{};
	local func		=	case level of(
		#Vertex:	obj.getVerticesByFlag
		#Edge:		obj.getEdgesByFlag
		#Face:		obj.getFacesByFlag
	)
	func result (bit.set 0 flag true);
	obj.setSelection level result;
	result;
)

--	Tries to safely reset whatever internal data is held in an Editable_Poly
global meshRefresh;
function meshRefresh p = (
	local sel;
	local obj	=	modPanel.getCurrentObject();
	local so	=	subobjectlevel;
	with redraw off(
		if(selection.count > 0 and obj != undefined) then(
			sel	=	selection as array;
			clearSelection();
		)
		
		convertToMesh p;
		update p;
		convertTo p Editable_Poly;
		
		if(sel != undefined) then(
			select sel;
			modPanel.setCurrentObject obj;
			subobjectlevel	=	so;
		)
		p;
	)
)


--	Safely detaches an Editable Mesh's subobject selection, based on level.
--	*	Note: This only works with editable base objects; modifiers are ignored.
global meshDetach;
mapped function meshDetach obj lvl del:true uName:unsupplied = (
	local result, sel;
	
	--	Vertex
	if(lvl == 1) then(
		sel		=	getVertSelection obj;
		if(not sel.isEmpty)
			then result	=	meshOp.detachVerts obj sel delete:del asMesh:true;
	)
	
	--	Faces
	else(
		sel		=	getFaceSelection obj;
		if(not sel.isEmpty)
			then result	=	meshOp.detachFaces obj sel delete:del asMesh:true;
	)
	
	--	Construct and return a new mesh if something was detached.
	if(result != undefined) then(
		update obj;
		local m	=	Editable_Mesh();
		m.mesh	=	result;
		update m;
		m.pos	=	obj.pos;
		result	=	m;
	)
	result;
)


--	Safely detaches an Editable Poly's subobject selection, based on level.
--	*	Note: This only works on editable base objects; modifiers are ignored.
global polyDetach;
function polyDetach obj lvl del:true uName:unsupplied = (
	local showResult	=	showEndResult;
	with redraw off(
		showEndResult	=	false;

		local uName	=	if(newName == unsupplied) then uniqueName "Object" else uName;
		if(lvl == 1)
			then	polyOp.detachVerts obj (polyOp.getVertSelection obj) delete:del asNode:true name:uName
		else if(lvl == 2 or lvl == 3)
			then	polyOp.detachEdges obj (polyOp.getEdgeSelection obj) delete:del asNode:true name:uName
			else	polyOp.detachFaces obj (polyOp.getFaceSelection obj) delete:del asNode:true name:uName

		showEndResult	=	showResult;
	)
)


--	Returns an Editable Poly's selection level based on an integer.
global polySelLevel;
function polySelLevel val asMesh:false = (
	case val of(
		1:	#Vertex
		2:	#Edge
		3:	if(asMesh) then #Edge else #Border
		4:	#Face
		5:	if(asMesh) then #Face else #Element
	);
)


--	Returns an unused bit flag for an Editable Poly's SO level.
--	*	selLevel: #Vertex, #Edge or #Face
global findSpareChannel;
function findSpareChannel obj selLevel = (
	local result, b, v;
	local func	=	case selLevel of(
		#Vertex:	obj.getVerticesByFlag
		#Edge:		obj.getEdgesByFlag
		#Face:		obj.getFacesByFlag
	)
	for i = 25 to 32 while (result == undefined) do(
		v	=	#{};
		b	=	bit.set 0 i true;
		func v b;
		if(v.isEmpty) then result = b;
	)
	result;
)


--	Filters out vertices that're connected to more than two edges
global filterMidEdgeVerts;
function filterMidEdgeVerts obj verts = (
	for i = 1 to verts.count do
		if((obj.GetVertexEdgeCount i) > 2) then
			verts[i]	=	off;
	verts;
)


--	Duplicates the "Clean Remove" behaviour used when CTRL+removing an edge.
--	*	WARNING: When used on very large meshes, function will run EXTREMELY slow.
global cleanRemove;
function cleanRemove obj = (
	local v;
	local isMod	=	isKindOf obj Modifier;
	local esel	=	if(ismod) then obj.GetSelection #Edge else polyOp.getEdgeSelection obj;
	
	--	Make sure we've some edges selected first.
	if(not(esel.isEmpty)) then(
		local vsel	=	if(isMod) then obj.GetSelection #Vertex else polyOp.getVertSelection obj;
		
		--	If we have a selection in the background, store it in a seperate flag
		if(not(vsel.isEmpty)) then(
			local flag	=	findSpareChannel obj #Vertex;
			if(flag != undefined) then
				obj.setVertexFlags vsel flag generateUndoRecord:true;
		)
		
		--	Modifiers Only
		if(isMod) then(
			obj.convertSelection #Edge #Vertex;
			obj.ButtonOp #RemoveEdge;
			obj.setSelection #Vertex (filterMidEdgeVerts obj (obj.getSelection #Vertex));
			obj.ButtonOp #RemoveVertex;
		)
		
		--	Editable Poly
		else(
			polyOp.setVertSelection obj (polyOp.getVertsUsingEdge obj esel);
			obj.remove selLevel:#Edge
			polyOp.setVertSelection obj (filterMidEdgeVerts obj (polyOp.getVertSelection obj));
			obj.remove selLevel:#Vertex
		)
		
		--	Vacate the flags we were using to store our selection.
		if(flag != undefined) then(
			v	=	#{}; obj.getVerticesByFlag v flag;
			if(isMod)
				then	obj.SetSelection #Vertex v;
				else	polyOp.setVertSelection obj v;
			obj.setVertexFlags #{} flag generateUndoRecord:true
		)
		if(isMod)
			then	obj.setSelection #Edge #{}
			else	polyOp.setEdgeSelection obj #{};
	)
)
