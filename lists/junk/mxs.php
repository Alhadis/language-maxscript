<?php
/*************************************************************************************
 * python.php
 * ----------
 * Author: Rob Galanakis (robg@robg3d.com)
 * Copyright: (c) 2008 Rob Galanakis (http://robg3d.com), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.7.22
 * Date Started: 2004/08/30
 *
 * maxScript (MXS) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/06/22 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 12/06/2008)
 * -------------------------
 *	- Support for ":", color-coding words with numbers, and the # sign
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
	'LANG_NAME' => 'MXS',
	'COMMENT_SINGLE' => array(1 => '--'),
	'COMMENT_MULTI' => array('/*' => '*/'),
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	//Longest quotemarks ALWAYS first
	'QUOTEMARKS' => array('"""', '"'),
	'ESCAPE_CHAR' => '\\',
	'KEYWORDS' => array(

		/*
		** Set 1: reserved words
		** http://www.scriptspot.com/bobo/mel2mxs/reserved_words.htm
		*/
		1 => array(
			'about', 'and', 'animate', 'as', 'at', 'by', 'case', 'catch', 'collect', 'continue',
			'coordsys', 'do', 'else', 'exit', 'fn', 'for', 'from', 'function', 'global', 'if',
			'in', 'local', 'macroscript', 'mapped', 'max', 'not', 'of', 'off', 'on', 'or', 'parameters',
			'persistent', 'plugin', 'rcmenu', 'return', 'rollout', 'set', 'struct', 'then', 'throw',
			'to', 'tool', 'try', 'undo', 'utility', 'when', 'where', 'while', 'with'
			),

		/*
		** Set 2: rollout controls
		*/
		2 => array(
			'angle', 'slider', 'spinner', 'button', 'checkbutton', 'mapbutton', 'materialbutton', 'pickbutton',
			'checkbox', 'colorpicker', 'listbox', 'multilistbox', 'dropdownlist', 'combobox', 'edittext',
			'groupbox', 'group', 'hyperlink', 'label', 'progressbar', 'radiobuttons', 'bitmap', 'imgTag',
			'SubRollout', 'curveControl', 'popUpMenu', 'timer', 'dotNetControl','SchematicControl'
			),
			
		/*
		** Set 3: function calls
		*/
		3 => array(
			
			),
			
		/*
		** Set 4: MAXScript Classes
		*/
		4 => array(
		
			),
			
		/*
		** Set 5: Max Classes
		*/
		5 => array(
			'CrowdDelegate', 'Lightscape_Layers', 'DwgLayerFilter', 'PFNotifyDepCatcher', 'Architectural', 'max_base_VideoColorCorrect', 'max_Speckle', 
			'DwgMaterialFilterReferenceMaker', 'Fire_Effect__3dsmax', 'Spherify', 'Missing_Render_Element_Plug_in', 'max_MultiMaterial_Contour', 'Position_Reactor', 'LinkLeafshape', 
			'RayFX', 'Crowd', 'STL_Export', 'DwgAlwaysEqualFilter', 'LZFlare_Aux_Data', 'ArchitecturalMaterial', 'Texture_Filter_Lookup__base', 
			'Opacity__base', 'DwgMaterialPacketReferenceMaker', 'max_FireEffect', 'Flex', 'CompleteMap', 'Height_Map_Displacement__3dsmax', 'PositionReactor', 
			'Point_Curveshape', 'RayFXUtil', 'cubic', 'bipedSystem', 'Lightscape_Material', 'PlanarCollision', 'LZFlare_AutoSec_Base', 
			'RaytraceMaterial', 'mib_texture_filter_lookup', 'mib_opacity', 'SW3D_Exp', 'Bump_Map__base', 'Layer_Manager', 'max_HeightMapDisplacement', 
			'Noise_position', 'CV_Curveshape', 'Dynamics', 'Priority', 'FBXEXP', 'DeleteMesh', 'SphericalCollision', 
			'ADT_Category', 'Advanced_Lighting_Override', 'Transmat__physics', 'Marble__3dsmax', 'mib_bump_map', 'NodeObject', 'max_ShellacMaterial_Contour', 
			'ShadowsMap', 'Attachment', 'NURBSCurveshape', 'UVW_Remove', 'Speed_Vary_Behavior', 'FbxExporter', 'Noisemodifier', 
			'MeshCollision', 'ADTCategory', 'Radiosity_Override', 'transmat', 'max_Marble', 'Lookup_Cube6__base', 'ParamBlockParamBlock', 
			'shaveMRVertexIllum', 'xNormalSBMExp', 'LightingMap', 'Surface_position', 'CV_Curve', 'Camera_Match', 'SpeedVaryBehavior', 
			'Lightscape_Preparation', 'Missing_OSM', 'CurveControl', 'MaxscriptParticleContainer', 'DiscreetRadiosityMaterial', 'Dielectric_Material_Photon__3dsmax', 'max_base_GBuffer', 
			'mib_lookup_cube6', 'mr_Matte_Shadow_Reflection', 'GeoSphere', 'mib_fg_occlusion', 'NormalsMap', 'Position_Motion_Capture', 'Point_Curve', 
			'Clean_MultiMaterial', 'SharedMotionFlows', 'IGES_Export', 'Ripplebinding', 'DoublePacket', 'MXSParticleContainer', 'Lightscape_Mtl', 
			'max2_dielectric_material_photon', 'max_MatteMaterial', 'Lume_Metal_Material__Phong', 'mip_matteshadow_mtl', 'TriMeshGeometry', 'shaveMRRenderComp', 'BlendMap', 
			'Missing_Position_Control', 'LinkBlockInstanceshape', 'MMClean', 'SharedMoflowList', 'Lightscape_Parameter', 'Wavebinding', 'VzObjectTableRecord', 
			'LZFlare_Data', 'lightscapeMtl', 'max_base_OrenNayarBlinnIllumination', 'Displacement_3D__3dsmax', 'Facade__lume', 'Box', 'shaveMRHairGeomDRA', 
			'AlphaMap', 'linear_rotation', 'Simple_Spline', 'Measure', 'StateCreator', 'Lightscape_Blocks', 'SpacePathDeform', 
			'BoolPacket', 'MIDI_Device', 'Shellac', 'Geo_Cylinder__base', 'max_Displacement', 'Facade', 'Sphere', 
			'ColladaExporter', 'max_BlendMaterial_Contour', 'HeightMap', 'bezier_rotation', 'Simple_Shape', 'Assign_Vertex_Colors', 'Orientation_Behavior', 
			'Wavefront_ObjectExporterPlugin', 'Gravitybinding', 'DwgBlockInsertFilter', 'TVNode', 'MorpherMaterial', 'mib_geo_cylinder', 'Splat__3dsmax', 
			'Ocean__lume', 'Cylinder', 'max_DoubleSidedMaterial_Contour', 'Missing_Texture_Bake_Element', 'Euler_XYZ', 'Missing_Shape', 'MAX_File_Finder', 
			'OrientationBehavior', 'Lightscape_View', 'Windbinding', 'DwgFilterList', 'IK_Controller', 'compositematerial', 'Passthrough_Bump_Map__base', 
			'max_Splat', 'Ocean', 'Torus', 'max_base_GBuffer_lens', 'mental_ray__material_custom_attribute', 'Local_Euler_XYZ', 'Material_XML_Exporter', 
			'CrowdState', 'JSR184Exporter', 'Displacebinding', 'Puppet_Point3_List', 'DwgEnhancedLayerFilter', 'Mouse_Input_Device', 'mental_ray', 
			'mib_passthrough_bump_map', 'max_MultiMaterial', 'Metal__lume', 'Tape', 'Torus_Knot', 'ColladaDocumentContainer', 'rgb', 
			'max_CompositeMaterial_Contour', 'standard', 'mrMaterialCustAttrib', 'Orientation_Constraint', 'XmlMtlExporter', 'SharedMotionFlow', 'AsciiExp', 
			'Deflectorbinding', 'PuppetPoint3List', 'DwgTableRecord', 'Joystick_Input_Device', 'mrMaterial', 'Distortion__lume', 'Gradient_Ramp__3dsmax', 
			'Metal', 'Point', 'Targetobject', 'mib_blackbody', 'Euler_Filter', 'mental_ray__Indirect_Illumination_custom_attribute', 'LookAt_Constraint', 
			'Motion_Capture', 'channel', 'SharedMoflow', 'VRBL_Export', 'Bombbinding', 'VzObjectTable', 'Missing_RefTarget', 
			'MyBricksPhenomenon', 'Distortion', 'max_GradientRamp', 'Geo_Plane__base', 'PointHelperObj', 'Morph', 'max_GenericBakeElement', 
			'mrIICustAttrib', 'tcb_rotation', 'ShineExp', 'Puppet_Point4_List', 'Scripted_Behavior', 'MPG', 'VortexMod', 
			'DwgExtrusionFilter', 'Bend', 'Glass__physics_phen', 'Physical_Lens_DOF__physics', 'max_base_BlinnIllumination', 'mib_geo_square', 'Protractor', 
			'Editable_Patch', 'mib_bump_map2', 'mental_ray__light_shader_custom_attribute', 'Rotation_Reactor', 'Shape_Check', 'cpuppetTrackview', 'PuppetPoint4List', 
			'ScriptedBehavior', 'SSS_Physical_Material__mi', 'PBombMod', 'Int64Packet', 'BendMod', 'dielectric_material_phen', 'physical_lens_dof', 
			'Layer_Thinner__contour', 'Ray_Marcher__base', 'Dummy', 'LoftObject', 'shaveMRHairGeom', 'mrLightShaderCustAttrib', 'RotationReactor', 
			'Reset_XForm', 'MinMaxAvg', 'misss_physical_phen', 'UDynaFlectMod', 'Contour_Data_Packet', 'Taper', 'DGS_Material__physics_phen', 
			'RGB_Multiply__3dsmax', 'contour_shader_layerthinner', 'mib_ray_marcher', 'Bone', 'shaveMRHairComp', 'mental_ray__Area_Light_custom_attribute', 'rotation_script', 
			'Color_Clipboard', 'Global_Clip_Associations', 'SSS_Fast_Skin_Material_Displace__mi', 'angle', 'Loft', 'MapScaler', 'Contour_Translator', 
			'dgs_material_phen', 'max_RGBMultiplier', 'max_base_StraussIllumination', 'max_IesSkylight', 'Sound', 'max_TopBottomMaterial_Contour', 'Ripple', 
			'mrAreaLightCustAttrib', 'Rotation_Wire', 'File_Link_Manager', 'text', 'GlobalClipAssociation', 'misss_fast_skin_phen_d', 'MapScalerSpacewarpModifier', 
			'Raster_Image_Translator', 'max_default_mtl_phen', 'Texture_Lookup__base', 'Dielectric__base', 'Geo_Cone__base', 'IK_Spline_End_Twist_Manip', 'Tube', 
			'Wave', 'ViewportManagerCustAttrib', 'WireRotation', 'Bitmap_Photometric_Paths', 'Multiple_Delegates', 'SSS_Fast_Skin_Material__mi', 'SpaceCameraMap', 
			'TexmapsReferenceMaker', 'Invisible__physics_phen', 'mib_texture_lookup', 'mib_dielectric', 'mib_geo_cone', 'IKEndSpTwistManip', 'sweep', 
			'Mesher', 'MACUtilities', 'Edit_Mesh', 'Missing_Custom_Attribute_Plugin', 'rotation_list', 'Rescale_World_Units', 'MultDeleg', 
			'misss_fast_skin_phen', 'SpaceConform', 'DwgPointTrans', 'transmat_phen', 'max_ArchitecturalMaterial', 'Cellular__3dsmax', 'Geo_Sphere__base', 
			'IK_Chain_Object', 'particleMesher', 'Edit_Spline', 'Light_Tracer', 'RotationList', 'Wander_Behavior', 'SSS_Fast_Material__mi', 
			'Point_CacheSpacewarpModifier', 'DwgEntityPacket', 'Missing_Mtl', 'Ambient_Reflective_Occlusion__3dsmax', 'max_base_TranslucentIllumination', 'max_Cellular', 'mib_geo_sphere', 
			'Slider_Manip', 'Select_Keys_by_Time', 'Plane', 'HairMaxUtility', 'Relax', 'LightTrace', 'Dynamics_Rotation_Controller', 
			'WanderBehavior', 'misss_fast_simple_phen', 'PointCacheWSM', 'DwgCameraPacket', 'NoTexture', 'max_amb_occlusion', 'Color_Average__base', 
			'Illum_Phong__base', 'Edge__lume', 'SliderManip', 'Create_Out_of_Range_Keys', 'meshGrid', 'Scene_Effect_LoaderUtilityPlugin', 'Edit_Patch', 
			'Radiosity', 'AudioRotation', 'CogControl', 'Normal_Bump', 'Old_Point_CacheSpacewarpModifier', 'HSUtil', 'Raytrace', 
			'mib_color_average', 'mib_illum_phong', 'ProxSensor', 'Randomize_Keys', 'L_Ext', 'Scene_State_Manager', 'Twist', 
			'VIZ_Radiosity', 'SlaveRotation', 'Geo_Cube__base', 'Surface_Arrive_Behavior', 'Gnormal', 'Old_PointCacheWSM', 'StdDualVS', 
			'Checker', 'Lume_Glow_Material__Lambertian', 'Volume_Light__3dsmax', 'Cone_Angle', 'Motion_Blur', 'max_rtt_output', 'PArray', 
			'Extrude', 'edge', 'Discreet_Radiosity', 'Noise_rotation', 'mib_geo_cube', 'SurfaceArriveBehavior', 'Camera_Map_Per_Pixel', 
			'Particle_Cache', 'DwgFactory', 'Marble', 'max_base_MetalIllumination', 'max_VolumeLight', 'ConeAngleManip', 'Spindle', 
			'Lathe', 'Missing_Radiosity', 'Rotation_Motion_Capture', 'Lookup_Cube1__base', 'Puppet_Master_List', 'Multiple_Delegate_Settings', 'Color_Balance', 
			'CameraMapTexture', 'ParticleCache', 'StringPacket', 'Wood', 'max_BlendMaterial', 'max_SpotLight', 'Falloff_Manipulator', 
			'Apollo_Param_Container', 'max_rtt_lens', 'Batch_Render_Manager', 'Bevel', 'Linear_Exposure_Control', 'Missing_Rotation_Control', 'mib_lookup_cube1', 
			'PuppetMasterList', 'Setting', 'colorBalance', 'SSS_Lambert_Gamma__mi', 'Path_FollowMod', 'AlwaysEqualFilter', 'Dent', 
			'Color_Spread__base', 'Vertex_Color__3dsmax', 'FalloffManip', 'apolloParamContainer', 'Stretch', 'AutomaticLinearExposureControl', 'linear_scale', 
			'max_base_MultiLayerIllumination', 'Path_Follow_Behavior', 'misss_lambert_gamma', 'MotorMod', 'DwgEnhLayerPacket', 'dents', 'mib_color_spread', 
			'max_VertexColor', 'Hotspot_Manip', 'Film_Grain', 'Conform', 'HairEffect', 'HSDS', 'Pseudo_Color_Exposure_Control', 
			'bezier_scale', 'max_TopBottomMaterial', 'PathFollowBehavior', 'Ambient_Reflective_Occlusion__base', 'Displace_Mesh', 'DwgBlockInsAsNodeHierarchyFilter', 'Mask', 
			'max_base_WardIllumination', 'Combi__contour', 'HotspotManip', 'FilmGrain', 'ChamferBox', 'ATSMax', 'HSDSObject', 
			'pseudoColorExposureControl', 'Scale_Expression', 'Night__lume', 'Seek_Behavior', 'mib_amb_occlusion', 'DragMod', 'DwgLightPacket', 
			'maskTex', 'Contour_Contrast_Function_Simple__contour', 'contour_shader_combi', 'IK_Swivel_Manip', 'Depth_of_Field', 'Editable_Poly', 'velocity', 
			'HSDS_Modifier', 'Logarithmic_Exposure_Control', 'tcb_scale', 'Night', 'SeekBehavior', 'SSS_Passthrough_Shader__mi', 'subdivideSpacewarpModifier', 
			'DwgBlockDefinitionFilter', 'RGB_Tint', 'contour_contrast_function_simple', 'MotionRenderElement', 'Volume_Fog__3dsmax', 'IKSwivelManip', 'DOFEffect', 
			'EditablePolyMesh', 'Face_Extrude', 'LightscapeExposureControl', 'ScaleXYZ', 'Stain__lume', 'Avoid_Behavior', 'misss_call_shader', 
			'UOmniFlectMod', 'DwgHandleFilter', 'rgbTint', 'Pseudo_Color_Camera_Exposure__3dsmaxtextureMap', 'Material_ID', 'max_VolumeFog', 'Plane_Angle', 
			'Lens_Effects', 'PCloud', 'Automatic_Exposure_Control', 'Scale_Reactor', 'Stain', 'AvoidBehavior', 'SSS_Fast_Render_Shader__mi', 
			'SimpleOSMToWSMMod2', 'DwgTableEntryPacket', 'Mix', 'max_ToneOpPseudo', 'materialIDRenderElement', 'Displace', 'Contour_Store_Function__contour', 
			'PlaneAngleManip', 'Apollo_Effect', 'OilTank', 'AutomaticAdaptiveExposureControl', 'ScaleReactor', 'XYZ_Generator__3dsmax', 'ClipState', 
			'misss_fast_shader', 'SimpleOSMToWSMMod', 'DwgColorFilter', 'mixTexture', 'Depth_Fade__contour', 'Object_ID', 'Linked_XForm', 
			'contour_store_function', 'SphereGizmo', 'File_Output', 'RmModel', 'Missing_Exposure_Control', 'AudioScale', 'max_base_XYZGenerator', 
			'Wall_Seek_Behavior', 'SSS_Specular_Reflections_for_Skin__mi', 'SpacePatchDeform', 'CustAttribContainer', 'Noise', 'contour_shader_depthfade', 'objectIDRenderElement', 
			'LinkedXForm', 'max_SceneData', 'CylGizmo', 'fileOut', 'BoneGeometry', 'Motion_BlurMPassCamEffect', 'scale_list', 
			'max_DoubleSidedMaterial', 'WallSeekBehavior', 'misss_skin_specular', 'PushMod', 'FloatPacket', 'Bitmaptexture', 'Width_From_Light_Dir__contour', 
			'Luminance_HDR_Data', 'Affect_Region', 'Illum_Blinn__base', 'PuppetTM', 'BoxGizmo', 'Axis_Helper', 'Brightness_and_Contrast', 
			'BoneObj', 'multiPassMotionBlur', 'ScaleList', 'Texture_Polka_Dot__base', 'ClipAssigner', 'Lens_Stencil__base', 'SpaceSurfDeform', 
			'DwgPluginTranslatorForwardingFilter', 'bitmapTex', 'contour_shader_widthfromlightdir', 'LuminanceRenderElement', 'Uvwmap', 'mib_illum_blinn', 'puppetTMController', 
			'Position_Value', 'AxisHelperObj', 'briteCon', 'RingWave', 'contour_shader_maxcolor', 'Depth_of_FieldMPassCamEffect', 'SlaveScale', 
			'mib_texture_polkadot', 'Space_Warp_Behavior', 'mib_lens_stencil', 'LS_Colors', 'NullFilter', 'Reflect_Refract', 'Curvature__contour', 
			'Illuminance_HDR_Data', 'Vol__Select', 'max_GizmoData', 'PositionValueManip', 'Missing_Render_Effect', 'Straight_Stair', 'multiPassDOF', 
			'scale_script', 'Beam__lume', 'WsmBehavior', 'max_GNormal', 'lsColors', 'PointPacket', 'reflectRefract', 
			'contour_shader_curvature', 'IlluminanceRenderElement', 'VolumeSelect', 'Thin_Wall_Refraction__3dsmax', 'Character', 'Area', 'Lightscape_Mesh', 
			'contour_shader_silhouette', 'Depth_of_Field__mental_ray', 'Scale_Wire', 'Beam', 'CrowdAssignment', 'max_PhysicalSun', 'UDeflectorMod', 
			'IntPacket', 'diffuseMap', 'Flat_Mirror', 'max_base_MeditBackground', 'HairRenderElement', 'Materialmodifier', 'max_ThinWallRefraction', 
			'CharacterHelper', 'Quadratic', 'C_Ext', 'specularMap', 'mrDOF', 'WireScale', 'max_DirectionalLight', 
			'CrowdTeam', 'max_CompleteBakeElement', 'SDeflectMod', 'BlockInstanceFilter', 'flatMirror', 'Frame_Fade__contour', 'Ambient_Occlusion', 
			'Light_Spot__base', 'Luminaire', 'Terrain', 'Standin_for_missing_MultiPass_Camera_Effect_Plugin', 'SmoothModifier', 'Noise_scale', 'Glare__lume', 
			'CrowdGroup', 'max_SpecularBakeElement', 'Displace_NURBS', 'Catmull_Rom', 'Raster_Image_Packet', 'Gradient', 'contour_shader_framefade', 
			'AmbientOcclusionBakeElement', 'mib_light_spot', 'LuminaireHelper', 'OldBoolean', 'linear_float', 'Normalmodifier', 'Scale_Motion_Capture', 
			'Glare', 'Wall_Repel_Behavior', 'max_BlendBakeElement', 'SDynaFlectMod', 'Blackman', 'AdtObjTranslator', 'CompositeTexturemap', 
			'Volume__base', 'HairLightAttr', 'max_RaytraceMaterial', 'LinkOriginPtHelper', 'Connect', 'bezier_float', 'Skin', 
			'Missing_Scale_Control', 'Water_Surface__lume', 'grid', 'WallRepelBehavior', 'Lens_Clamp__base', 'SOmniFlectMod', 'Sharp_Quadratic', 
			'Missing_RefMaker', 'compositeTexture', 'mib_volume', 'Float_Mixer_Controller', 'max_base_CurveControl', 'DaylightAssemblyHead', 'Damper', 
			'Float_Expression', 'Unwrap_UVW', 'Barycentric_Morph_Controller', 'WaterSurface', 'CrowdTransition', 'mib_lens_clamp', 'PDynaFlectMod', 
			'Video', 'Ray_Engine', 'RGB_Multiply', 'Illum_CookTorr__base', 'float_limit', 'Two_Sided__base', 'Reactor_Angle_Manip', 
			'Gengon', 'tcb_float', 'UVWUnwrap', 'Cubic_Morph_Controller', 'Glass__lume', 'Transition', 'max_AlphaBakeElement', 
			'POmniFlectMod', 'Plate_Match_MAX_R2', 'Morph_Angle_Deformer', 'rgbMult', 'mib_illum_cooktorr', 'FloatLimitCtrl', 'mib_twosided', 
			'ReactorAngleManip', 'Foliage', 'Block_Manager_Wrapper', 'Spline_IK_Control', 'Missing_Morph_Control', 'Glass', 'Surface_Follow_Behavior', 
			'max_LightBakeElement', 'Surface_Mapper', 'Cook_Variable', 'gizmoJointMorph', 'fallofftextureMap', 'Dielectric_Material_Photon__physics', 'Scene_Effect_Loader', 
			'max_base_Curve', 'CamPoint', 'PF_Source', 'BlockMgrWrapper', 'Push', 'Master_Point_Controller', 'Mist__lume', 
			'SurfaceFollowBehavior', 'mib_continue', 'FFD_Binding', 'Soften', 'Joint_Angle_Deformer', 'output', 'dielectric_material_photon', 
			'SharedMotionFlowsFloatController', 'Illum_Hair__base', 'Substitute_Object', 'PolymorphicGeom', 'AudioFloat', 'MapScalerOSM', 'Block_Control', 
			'Mist', 'smoothReferenceTarget', 'max_NormalsBakeElement', 'Missing_WSM', 'Mitchell_Netravali', 'gizmoJoint', 'Vertex_Color', 
			'Factor_Color__contour', 'Reservoir', 'mib_illum_hair', 'SubstituteObject', 'Boolean2', 'Sunlight_Daylight_Slave_Intensity_ControllerFloatController', 'MapScalerModifier', 
			'MasterList', 'Translucency__lume', 'Clip_Associations', 'max_RTTCageData', 'SpaceBend', 'Blendfilter', 'Bulge_Angle_Deformer', 
			'ColladaEffect', 'VertexColor', 'contour_shader_factorcolor', 'Point3_Mixer_Controller', 'Illum_Ward__base', 'Position_Manip', 'Blizzard', 
			'ADT_Object_Manager_Wrapper', 'Trim_Extend', 'MasterBlock', 'Translucency', 'ClipAssociation', 'max_ShadowBakeElement', 'BendModWSM', 
			'Filter_kernel_plug_in_not_found', 'gizmoBulge', 'Splat', 'Photon_Basic__base', 'Matrix3_Mixer_Controller', 'mib_illum_ward', 'PositionManip', 
			'Spiral_Stair', 'ADTObjMgrWrapper', 'Vertex_Colors', 'Master_Controller_plugin_not_found', 'Dielectric_Material__3dsmax', 'Repel_Behavior', 'max_CameraMap', 
			'SpaceTaper', 'BlinnShader', 'LZHilight_Aux_Data', 'Stucco', 'mib_photon_basic', 'SlaveMatrix3', 'Pseudo_Color_Camera_Exposure__3dsmax', 
			'Compass', 'Scatter', 'float_script', 'bezier_point4', 'max2_dielectric_material', 'RepelBehavior', 'Light_Photometric__base', 
			'Spaceripple', 'Phong', 'LZGlow_Data', 'Smoke', 'Lightmap_Sample__base', 'XRef_Controller', 'contour_contrast_light_levels', 
			'Squeeze', 'IK_Spline_Start_Twist_Manip', 'PolyMeshObject', 'Float_Wire', 'bezier_rgba', 'Transmat_Photon__physics', 'ScatterReferenceTarget', 
			'mib_light_photometric', 'Spacewave', 'Phong2', 'LZHilight_Data', 'mr_Render_Subset_of_Scene', 'Shader_List__Environment', 'mib_lightmap_sample', 
			'IK_Position_Controller', 'Material_to_Shader', 'DeleteSplineModifier', 'IKStartSpTwistManip', 'U_Type_Stair', 'WireFloat', 'tcb_point4', 
			'transmat_photon', 'ObjAssoc', 'max_DiffuseBakeElement', 'SpaceTwist', 'Blinn', 'Streak_Element', 'mip_render_subset', 
			'Shader_List__Texture', 'Dent__3dsmax', 'Position_Mixer_Controller', 'max_MaterialToShader', 'CrossSection', 'TouchSensor', 'UTypeStair', 
			'float_list', 'Color_RGBA', 'Geo_Torus__base', 'Physique', 'max_HeightBakeElement', 'SpaceStretch', 'Blinn2', 
			'Manual_Secondary_Element', 'quadPatch', 'Gradient_Ramp', 'max_Dent', 'Rotation_Mixer_Controller', 'Particle_Age__3dsmax', 'Viewport_Render', 
			'LinkComposite', 'triPatch', 'FloatList', 'Point4_XYZW', 'mib_geo_torus', 'Lattice', 'Vector_Field_Modifier', 
			'max_ReflectRefractBakeElement', 'PathDeformSpaceWarp', 'MetalShader', 'MSec_Element', 'Shader_List__Output', 'Tint__3dsmax', 'Scale_Mixer_Controller', 
			'max_ParticleAge', 'mr_Gamma___Gain', 'ViewportRender', 'Prism', 'Instance_Manager_Wrapper', 'Point4_Wire', 'Texture_Polka_Sphere__base', 
			'Fillet_Chamfer', 'Vector_Field', 'SSS_Lightmap_Write__mi', 'gravity', 'Metal2', 'Ray_Element', 'Perlin_Marble', 
			'max_Tint', 'Point4_Mixer_Controller', 'max_base_Output', 'mip_gamma_gain', 'PFEngine', 'ControlContainer', 'InstanceMgrWrapper', 
			'WirePoint4', 'mib_texture_polkasphere', 'Morpher', 'VectorField', 'misss_lightmap_write', 'Wind', 'Oren_Nayar_Blinn', 
			'ADT_Object_Manager', 'perlinMarble', 'Contour_PS__contour', 'SlavePoint4', 'max_Raytrace', 'DisplayParticles', 'Hose', 
			'boolean_float', 'point4_script', 'Glow__lume', 'Patch_Select', 'Motion_Clip', 'max_is_material_editor', 'Spacedisplace', 
			'OrenNayarBlinn', 'JFlagSetData', 'FoliagetextureMap', 'contour_ps', 'ProCutter', 'max_CompositeMaterial', 'RenderParticles', 
			'mr_Gray_Ball', 'LinkLeaf', 'boolcntrl', 'point4_list', 'Glow', 'Normalize_Spl', 'Motion_Clip_SlaveFloat', 
			'Deflector', 'Strauss', 'Star_Element', 'Adobe_Photoshop_Plug_In_Filter', 'Noise__3dsmax', 'ProBoolean', 'Gradient__3dsmax', 
			'Event', 'mip_grayball', 'ShapeMerge', 'SlaveFloat', 'Point4List', 'Texture_Turbulence__base', 'Normalize_Spline', 
			'Biped_SubAnim', 'SSS_Physical_Shader__mi', 'Bomb', 'Anisotropic', 'ADT_StyleComposite', 'Adobe_Premiere_Video_Filter', 'max_Noise', 
			'ProBoolObj', 'max_Gradient', 'PFArrow', 'NURBS_Imported_Objects', 'Block', 'Missing_Point4_Control', 'mib_texture_turbulence', 
			'FFD_2x2x2', 'Motion_ClipFloatController', 'misss_physical', 'PDynaFlect', 'Multi_Layer', 'ADTStyleComp', 'Shader_List__Lens', 
			'Swirl__3dsmax', 'mr_Sky', 'Simple__contour', 'Birth', 'BlobMesh', 'mr_Mirror_Ball', 'Float_Reactor', 
			'Physical_Light__physics', 'FFD2x2x2', 'Motion_Clip_SlavePoint3', 'Default_Sound', 'PDynaflector', 'MultiLayer', 'JFlagCtlData', 
			'Combustion', 'max_Swirl', 'mrPhysSkyLight', 'contour_shader_simple', 'Awning', 'Position_Icon', 'Capsule', 
			'mip_mirrorball', 'FloatReactor', 'physical_light', 'FFD_4x4x4', 'Footsteps', 'Missing_SoundObj', 'MapScalerSpaceWarp', 
			'Translucent_Shader', 'LZFlare_Prefs_Data', 'Shader_List__Photon_Volume', 'Color_Intensity__base', 'mr_Sun', 'DGS_Material_Photon__3dsmax', 'surface', 
			'Particle_View', 'max_RenderElementHandler', 'Lightscape_MeshGeometry', 'Sunlight_Daylight_Slave_Intensity_Controller', 'Geo_Instnace_mlist__base', 'FFD4x4x4', 'Pivoted', 
			'BipSlave_Control', 'Clone_and_Align_Tool', 'Vortex', 'Translucent', 'LZFlare_Streak_Data', 'Planet', 'mib_color_intensity', 
			'mentalraySun', 'max2_dgs_material_photon', 'ParticleView', 'SlidingDoor', 'Noise_float', 'mib_geo_instance_mlist', 'mr_Camera_Map', 
			'FFD_3x3x3', 'BiFold', 'Vertical_Horizontal_Turn', 'Object_Display_Culling', 'UOmniFlect', 'Missing_Shader_Plug_in', 'JGradCtlData', 
			'Shader_List__Volume', 'Refract__base', 'ShaveStylinIcon', 'max_ShaderList', 'L_Type_Stair', 'Waveform_Float', 'max_StdRenderElements', 
			'mip_cameramap', 'FFD3x3x3', 'Casement', 'Motion_Clip_SlavePos', 'DisplayCulling', 'CameraMapSpaceWarp', 'shadowMap', 
			'JPercent3Data', 'Speckle', 'mib_refract', 'Hair_Atmospheric_Gizmo', 'Width_From_Color__contour', 'spin', 'LTypeStair', 
			'On_Off', 'Illumination__lume', 'CameraMap', 'Fixed', 'Motion_Clip_SlaveRotation', 'Default_Color_Picker', 'UDeflector', 
			'raytraceShadow', 'SortKey', 'PhilBitmap', 'Lightmap_Write__base', 'HairAtmosphericGizmo', 'contour_shader_widthfromcolor', 'ShapeStandard', 
			'SlidingWindow', 'FileLink_LinkTable', 'Illumination', 'Point_Cache', 'RBCollection', 'Motion_Clip_SlaveScale', 'JSR184SceneGUP', 
			'PushSpaceWarp', 'mr_Matte_Shadow_ReflectiontextureMap', 'Area_Shadows', 'Raytrace_Texture_ParamBlock', 'Bricks', 'mib_lightmap_write', 'DwgMaterialFilter', 
			'Contour_Only__contour', 'ScaleParticles', 'SuperSpray', 'LOD_Controller', 'UV_Generator__3dsmax', 'PointCache', 'rctRBCollection', 
			'Max_MotionClip_Implementation', 'ParameterEditor', 'ConformSpaceWarp', 'mip_matteshadow', 'Adv__Ray_Traced', 'Empty_Flow', 'tiles', 
			'Output__3dsmax', 'DwgMaterialPacket', 'contour_only', 'ParticleGroup', 'BezierCurve', 'Float_Motion_Capture', 'max_base_UVGenerator', 
			'Old_Point_Cache', 'Springhelper', 'MaxMotionClipImp', 'WalkThroughGUP', 'SDynaFlect', 'materialhelper', 'Advanced_Ray_traced', 
			'EmptySource', 'Shader_List__Bump', 'max_Output', 'RefTargMonitor', 'DGS_Material__3dsmax', 'Point_SurfGeometry', 'BezierCurveController', 
			'Missing_Float_Control', 'Path_Material__physics', 'Old_PointCache', 'rctSpring', 'Global_Motion_Clip', 'GameNavGup', 'SDynaflector', 
			'Shape_Instance', 'StdShadowGen', 'JBinaryData', 'Shader_List__Shadow', 'max_ParticleData', 'IndirectRefTargContainer', 'max2_dgs_material', 
			'mr_Motion_Vector_Export', 'Point_Surf', 'bezier_point3', 'path_material', 'XForm', 'L_Dashpot', 'GlobalMotionClip', 
			'ParserLoader', 'Drag', 'Shape_Mark', 'mental_ray_Shadow_Map', 'PainterInterface', 'falloff', 'Bump__3dsmax', 
			'Arch___Design__mi', 'Refraction_Index__base', 'mip_motion_vector', 'CV_Surf', 'Puppet_Position_List', 'bezier_color', 'Parti_Volume__physics_legacy', 
			'symmetry', 'rctLinearDashpot', 'Master_Motion_Clip', 'Crusher', 'PBomb', 'Shape_Facing', 'mrShadowMap', 
			'thePainterInterface', 'swirl', 'max_Bump', 'mrArchMaterial', 'mib_refraction_index', 'optimize', 'NURBSSurf', 
			'PuppetPositionList', 'Point3_Expression', 'parti_volume', 'SliceModifier', 'Fracture', 'MasterClip', 'AshliMax', 
			'POmniFlect', 'DeleteParticles', 'Missing_Shadow_Type', 'LZFlare_Glow_Data', 'Particle_Bitmap', 'Contour_Composite__contour', 'Car_Paint_Material__mi', 
			'Logarithmic_Camera_Exposure__3dsmax', 'mr_Motion_Blur', 'Pyramid', 'tcb_point3', 'Ink__N_Paint__3dsmax', 'Turn_to_Poly', 'rctFracture', 
			'ExposeTm', 'ParameterCollectorCA', 'Motor', 'Force', 'Mb_select', 'LZFlare_AutoSec_Data', 'Water', 
			'contour_composite', 'mi_car_paint_mtl_phen_max', 'max_ToneOpLog', 'mip_motionblur', 'LinkBlockInstance', 'Color_RGB', 'max_InkNPaint', 
			'FFD_Select', 'Point_Path', 'ExposeTransform', 'Expose_Float_Control', 'SOmniFlect', 'Position_Object', 'MaxRenderer_COM_Server', 
			'LZGlow_Rend_Data', 'waves', 'Light_Infinite__base', 'Hair_Instanced_Geometry_MR_Shader', 'Width_From_Light__contour', 'ChamferCyl', 'Point3_XYZ', 
			'Shader_List__Displacement', 'LS_Mesh', 'rctPointToPath', 'DwgExtrusionPacket', 'Expose_Point3_Control', 'SpaceFFDBox', 'SpeedByIcon', 
			'ViewportManager', 'LZFlare_ManSec_Data', 'Reflect_Refract__3dsmax', 'mib_light_infinite', 'HairMRIntanceGeomShader', 'contour_shader_widthfromlight', 'Spring', 
			'mr_Card_Opacity', 'SpringPoint3Controller', 'Particle_MBlur', 'lsMesh', 'CSolver', 'Reaction_Manager', 'Expose_Euler_Control', 
			'UDynaFlect', 'Keep_Apart', 'ViewportManagerControl', 'JWorldData', 'max_ReflectRefract', 'Store_Ligth_Levels', 'mr_Physical_Sky', 
			'DGS_Material__physics', 'Railing', 'mip_card_opacity', 'Point3Spring', 'particleBlur', 'Paste_Skin_Weights', 'rctConstraintSolver', 
			'ReactionManager', 'Hair_MR_Object', 'UDynaDeflector', 'Speed_By_Surface', 'mental_ray__object_custom_attributes_manager', 'LZFlare_Star_Data', 'Texture_Vector__base', 
			'contour_store_light', 'mrSkyEnv', 'dgs_material', 'Wall', 'Point3_Reactor', 'Particle_Age', 'PasteSkinWeights', 
			'Toy_Car', 'Reaction_Master', 'HairMRObj', 'SDeflector', 'Birth_Script', 'mrObjectCustAttrib_Manager', 'JColorData', 
			'mib_texture_vector', 'Planet__3dsmax', 'shaveMRGeomPasser', 'max_base_ImageCollector', 'RmModelGeometry', 'Point3Reactor', 'Cellular', 
			'mr_Raytype_Switcher__environment', 'UVW_Mapping_Clear', 'rctToyCar', 'ReactionMaster', 'HalfRound', 'SpaceSkew', 'Script_Operator', 
			'mental_ray__material_custom_attributes_manager', 'RayMeshGridIntersect', 'Wet_Dry_Mixer__lume', 'max_Planet', 'shaveMRInstanceGeom', 'max_base_ConstantIllumination', 'Spray', 
			'AudioPoint3', 'cellularTex', 'mip_rayswitch_environment', 'MapChannelDelete', 'RPCollection', 'DwgEnhColorPacket', 'QuarterRound', 
			'Path_Follow', 'Notes', 'mrMaterialCustAttrib_Manager', 'ADT_SyleLeaf', 'Wet', 'Architectural__Round_Corners_Bump', 'max_TexturedSkylight', 
			'Snow', 'point3_script', 'Thin_Wall_Refraction', 'UVW_Mapping_Paste', 'rctRPCollection', 'Reaction_Set', 'Pipe', 
			'SpaceNoise', 'Cache', 'Particle_View_Global_Actions', 'Ring_Element', 'Edge_Shadow__lume', 'mia_roundcorners', 'Light_Point__base', 
			'Cone', 'Point3_Wire', 'thinWallRefraction', 'MapChannelPaste', 'A_Dashpot', 'ReactionSet', 'mr_Raytype_Switcher__advanced', 
			'SpaceFFDCyl', 'Material_Static', 'Vertex_Paint_Startup_GUP', 'DummyRadMapClass', 'EdgeShadow', 'Max_Bitmap__3dsmax', 'mi_metallic_paint', 
			'mib_light_point', 'DirectX_Shader', 'Teapot', 'WirePoint3', 'Missing_TextureMap', 'UVW_Mapping_Add', 'rctAngularDashpot', 
			'Project_Mapping', 'mip_rayswitch_advanced', 'Missing_WSM_Object', 'Material_Dynamic', 'PaintboxStartup', 'WideFlange', 'radianceMap', 
			'MyBricks', 'max_Bitmap', 'mia_exposure_simple', 'Lume_Translucent_Material__Lambertian', 'smooth', 'Editable_mesh', 'point3_list', 
			'StandardUVGen', 'MapChannelAdd', 'DMCollection', 'ProjectionModTypeUVW', 'Targa', 'Material_Frequency', 'Plug_in_Manager', 
			'Tee', 'JColor3Data', 'Dielectric_Material__physics', 'max_dummy', 'shaveMRShadowMatte', 'Shadow_Transparency__base', 'Hedra', 
			'Point3List', 'Missing_UVGen', 'Select_By_Channel', 'rctDMCollection', 'RefTargContainer', 'tgaio', 'Age_Test', 
			'Save_Verification', 'AnimTrack', 'LZFlare_Rend_Data', 'mr_Raytype_Switcher', 'dielectric_material', 'Light_lines', 'mia_physicalsky', 
			'mib_shadow_transparency', 'mirror', 'Missing_GeomObject', 'Slave_Point3', 'StandardXYZGen', 'SelectByChannel', 'CLCollection', 
			'TurboSmooth', 'YUV', 'Spawn', 'Base_LayerBase_Layer', 'RvtComponentPacket', 'RenderElementMgr', 'mip_rayswitch', 
			'max_DefaultMaterial', 'contour_shader_lightlines', 'mia_physicalsun', 'Illum_Ward_Deriv__base', 'Freecamera', 'mr_Sky_Portal', 'SlavePoint3', 
			'tessellate', 'Missing_XYZGen', 'Melt', 'rctCLCollection', 'Projection', 'IFL', 'Collision', 
			'IKLimb', 'TrackSetList', 'This_Data', 'Falloff2__3dsmax', 'Reflect__base', 'mi_Glossy_Refraction__mi', 'mib_illum_ward_deriv', 
			'meshsmooth', 'Targetcamera', 'mrSkylightPortal', 'Noise_point3', 'StandardTextureOutput', 'Shell', 'Windhelper', 
			'ProjectionMod', 'BMP', 'Collision_Spawn', 'SplineIKSolver', 'RvtElementtPacket', 'LZHilight_Rend_Data', 'max_Falloff2', 
			'mib_reflect', 'mib_glossy_refraction', 'Lookup_Spherical__base', 'Missing_Camera', 'Point3_Motion_Capture', 'Missing_Texture_Output_Plug_in', 'Turn_to_Patch', 
			'rctWind', 'Skin_Wrap_Patch', 'bmpio', 'Speed_Test', 'IKHISolver', 'RvtObjTranslator', 'LZFlare_Ring_Data', 
			'max_DefaultShadow', 'Falloff__3dsmax', 'mi_Glossy_Reflection__mi', 'mib_lookup_spherical', 'Omnilight', 'Missing_Point3_Control', 'Default_Scanline_Renderer', 
			'ConvertToPatch', 'Carwheel', 'SkinWrapPatch', 'JPEG', 'Find_Target', 'Beauty', 'TrackSet', 
			'RaytraceGlobalSettings', 'Arch__Exposure___Photographic___Max', 'max_base_VideoSuperBlack', 'max_Falloff', 'mib_glossy_reflection', 'Color_Mix__base', 'ColladaImporter', 
			'prs', 'DefaultScanlineRenderer', 'STL_Check', 'rctCarwheel', 'Skin_Wrap', 'jpegio', 'Scale_Test', 
			'beautyRenderElement', 'Auto_Secondary_Element', 'Directionallight', 'max_exposure_photographic', 'collapse', 'Bump_Capture__lume', 'Mask__3dsmax', 
			'mi_bump_flakes', 'mib_color_mix', 'lookat', 'VUE_File_Renderer', 'Cap_Holes', 'Motorhelper', 'MeshDeformPW', 
			'AVI', 'Script_Test', 'Specular', 'NodeTransformMonitor', 'ASec_Element', 'BumpCapture', 'max_Mask', 
			'mrArchMaterialtextureMap', 'Flat_Mirror__3dsmax', 'TargetDirectionallight', 'Slave_Control', 'mental_ray_renderer', 'Preserve', 'rctMotor', 
			'Project_Mapping_Holder', 'RLA', 'Send_Out', 'specularRenderElement', 'NodeMonitor', 'Gradient_GradCtlData', 'WrapAround__lume', 
			'Smoke__3dsmax', 'mia_material', 'max_FlatMirror', 'Arch__Environment_Blur', 'IES_Sun', 'IKControl', 'Missing_Renderer', 
			'Edit_Normals', 'Planehelper', 'ProjectionHolderUVW', 'RPF', 'Split_Amount', 'Diffuse', 'Captured_Object_State', 
			'JAngleData', 'GlaretextureMap', 'WrapAround', 'max_Smoke', 'mia_physicalskylight', 'Contour_Store_Function_Simple__contour', 'mia_envblur', 
			'freeIesSun', 'mr_Photographic_Exposure_Control', 'SplineIKChain', 'Fog', 'EditNormals', 'rctPlane', 'Edit_Poly', 
			'GIF', 'Split_Source', 'diffuseRenderElement', 'Metal_Bump9', 'JFloat3Data', 'max_Glare', 'max_DefaultLight', 
			'Car_Paint_Shader__mi', 'contour_store_function_simple', 'Free_Point', 'mrToneMapExposureControl', 'TVDummyControl', 'Volume_Fog', 'SplineSelect', 
			'Point_Point', 'EditPolyMod', 'TIF', 'Split_Selected', 'Self_Illumination', 'JFloatData', 'Submerge__lume', 
			'mi_car_paint_phen_max', 'Lookup_Cylindrical__base', 'Arch__DOF___Bokeh', 'line', 'Free_Area', 'Substituion_Offset_Transform', 'Volume_Light', 
			'MaterialByElement', 'rctPointToPoint', 'Skin_Morph', 'tifio', 'Go_To_Rotation', 'emissionRenderElement', 'MeshProjIntersect', 
			'VzMaterialTable', 'Submerge', 'Perlin_Marble__3dsmax', 'max_mia_material_renderelements', 'mib_lookup_cylindrical', 'mia_lens_bokeh', 'Target_Linear', 
			'Link_Transform', 'Fire_Effect', 'Turn_to_Mesh', 'Prismatic', 'MorphByBone', 'EPS_Image', 'Anchor', 
			'Reflection', 'Max_Master_Clip', 'FileLink_VzMaterialTable', 'LumeTools', 'max_PerlinMarble', 'Metronome', 'Color_Interpolate__base', 
			'Puppet_Rotation_List', 'IES_Sky', 'IKChainControl', 'XRefAtmosWrapper', 'UVW_Xform', 'rctPrismatic', 'Renderable_Spline', 
			'PSD_I_O', 'AudioClip', 'reflectionRenderElement', 'Select_the_Biped_for_use_as_a_retargeting_reference', 'mrOptions', 'Oversampling_Lens__physics', 'max_base_AnisotropicIllumination', 
			'Hair_GI_Atmospheric', 'mib_color_interpolate', 'PuppetRotationList', 'IesSkyLight', 'Arch__Exposure___Photographic', 'transform_script', 'RenderEnvironment', 
			'PatchDeform', 'SBCollection', 'RendSpline', 'HDRI', 'Billboard', 'Refraction', 'Scene_State', 
			'mrPBParameter', 'oversampling_lens', 'Illum_Lambert__base', 'HairGIAtmospheric', 'Environment__3dsmax', 'Helium_Controller', 'Target_Point', 
			'mia_exposure_photographic', 'Link_Constraint', 'Missing_Atmospheric', 'NSurf_Sel', 'rctSBCollection', '3D_Studio', 'DDS', 
			'Background', 'refractionRenderElement', 'Standard_Flow', 'XYZ_Coordinate__3dsmax', 'mib_illum_lambert', 'Hair_Atmospheric', 'max_Environment', 
			'targetSpot', 'heliumController', 'Garment_Maker', 'Target_Area', 'Link', 'freeSpot', 'Link_Inheritance__Selected', 
			'NCurve_Sel', 'Hinge', '3D_Studio_Shape', 'QTime', 'TimeSensor', 'ShadowRenderElement', 'DefaultSource', 
			'max_XYZCoordinate', 'max_base_PhongIllumination', 'HairAtmospheric', 'Parti_Volume__physics', 'Garmentize2', 'Free_Linear', 'IK_ControllerMatrix3Controller', 
			'Instance_Duplicate_Maps', 'DwgSunPacket', 'Architectural__Self_Illuminator', 'OldVertexPaint', 'rctHinge', 'Adobe_Illustrator_Shape', 'CMB', 
			'NavInfo', 'Atmosphere', 'JBoolData', 'max_ShellacMaterial', 'DGS_Material_Photon__physics', 'CommCenterGUP', 'max2_parti_volume', 
			'mapping', 'Cloth', 'Puppet_Controller', 'Skylight', 'Missing_Matrix3_Control', 'pivot', 'InstanceDuplMap', 
			'mia_light_surface', 'MultiRes', 'Ragdoll', 'AutoCADImport', 'CIN', 'FogHelper', 'atmosphereRenderElement', 
			'JPercentData', 'max_UnknownMaterial', 'dgs_material_photon', 'DialogMonitor', 'max_ObjectData', 'clothfx', 'puppetController', 
			'Texture_Sky', 'linear_position', 'MAXScript', 'MrmMod', 'rctRagdoll', 'FBXIMP', 'Portable_Network_Graphics', 
			'LOD', 'BlendRenderElement', 'alpha', 'LZFocus_Data', 'Adjustments__lume', 'Transparency__base', 'SimpleFaceData', 
			'max_NodeData', 'HairMod', 'TexSkyLight', 'bezier_position', 'Surface_Approximation', 'Skew', 'Collision_Info', 
			'FbxImporter', 'pngio', 'Architectural__Environment_Portal', 'Inline', 'Z_Depth', 'DwgLayerTable', 'Adjustments', 
			'mib_transparency', 'Float_Layer', 'Composite__3dsmax', 'ImportTRC', 'Missing_Light', 'Path_Constraint', 'Substitute_Manager', 
			'Puppet_Float_List', 'Vertex_Weld', 'rctCollisionInfo', 'STL_Import', 'mia_portal_light', 'Missing_Helper', 'ZRenderElement', 
			'FileLink_DwgLayerTable', 'Texture_Wave__base', 'Water__3dsmax', 'Layer_Output', 'max_Composite', 'NoMaterial', 'ImportHTR', 
			'SplineShape', 'path', 'Level_of_Detail', 'PuppetFloatList', 'speed', 'VertexWeld', 'reactor_Rope', 
			'FileLinkAsDwgImporter', 'Bones', 'LZFlare_ManSec_Base', 'mib_texture_wave', 'max_Water', 'float_ListDummyEntry', 'Color_Alpha__base', 
			'projected', 'Standardmaterial', 'alphaRenderElement', 'InventorImport', 'LinearShape', 'Position_Expression', 'Asset_Browser', 
			'imageMotionBlur', 'Mesh_Select', 'rctRopeModifier', 'mental_ray_Import', 'Ring_Array', 'Glow_Element', 'Texture_CheckerBoard__base', 
			'Wood__3dsmax', 'Point3_Layer', 'mib_color_alpha', 'BackgroundRenderElement', 'ExportHTR', 'Position_Constraint', 'IFL_Manager', 
			'MeshSelect', 'reactor_Cloth', 'mrImporter', 'Daylight', 'JSubtex', 'TopBottom', 'mib_texture_checkerboard', 
			'max_Wood', 'Point3Layer', 'Bump_Basis__base', 'Ngon', 'bgndRenderElement', 'DWF_Exporter', 'tcb_position', 
			'COM_DCOM_Server_Control', 'SurfDeform', 'rctClothModifier', 'IGES_Import', 'Sunlight', 'LZGlow_Aux_Data', 'topBottomMat', 
			'Geo_Instance__base', 'Stucco__3dsmax', 'point3_ListDummyEntry', 'mib_bump_basis', 'Donut', 'Lighting', 'MaxOpenEXR', 
			'Position_XYZ', 'Fix_Ambient', 'Substitute', 'reactor_SoftBody', 'Wavefront_Object', 'XRefObject', 'LZFlare_Rays_Data', 
			'Multimaterial', 'mib_geo_instance', 'max_Stucco', 'Position_Layer', 'max_StandardMaterial', 'Rectangle', 'LightingRenderElement', 
			'exrio', 'Sunlight_Daylight_Slave_ControllerPositionController', 'FixAmbient', 'SubstituteMod', 'rctSoftBodyModifier', 'VrmlImp', 'Missing_System', 
			'JWorld3Data', 'multiSubMaterial', 'Parti_Volume_Photon__physicstextureMap', 'Bricks__3dsmax', 'PositionLayer', 'Parti_Volume_Photon__physics', 'Ellipse', 
			'MatteRenderElement', 'XRef_Material', 'position_list', 'Camera_Tracker', 'mia_material_x', 'Disp_Approx', 'reactor_Water', 
			'Lightscape_Importer', 'ParamBlock2ParamBlock2', 'LightMap', 'DoubleSided', 'parti_volume_photon', 'max_Bricks', 'position_ListDummyEntry', 
			'max2_parti_volume_photon', 'ColladaEffectParameterCollection', 'Ink', 'XRefmaterial', 'PositionList', 'Helix', 'Visual_MAXScript', 
			'Bevel_Profile', 'rctWaterWSM', 'XMLImp2', 'Material_Editor', 'ADT_Style', 'doubleSidedMat', 'max_PhotometricPointLight', 
			'Particle_Blur__3dsmax', 'Rotation_Layer', 'Add_UV_Texsurf__base', 'InkRenderElement', 'Hair_MR_Geom_Shader', 'AudioPosition', 'Star', 
			'VisualMSUtil', 'subdivide', 'Poly_Select', 'WaterSpaceWarp', 'LandXML___DEM_Model_Import', 'Deform_Curve', 'ADTStyle', 
			'Blend', 'Landscape__lume', 'max_ParticleBlur', 'RotationLayer', 'mib_geo_add_uv_texsurf', 'Paint', 'HairMRGeomShader', 
			'position_script', 'ColladaSimpleAttrib', 'Arc', 'Strokes', 'PolyMesh_Select', 'rctWaterWSMObject', 'LandXMLImport', 
			'MtlLib', 'LZFlare_Inferno_Data', 'Shell_Material', 'Landscape', 'Contour_Contrast_Function_Levels__contour', 'rotation_ListDummyEntry', 'max_OmniLight', 
			'PaintRenderElement', 'Emulator', 'Position_Wire', 'SimpleAttrib', 'Circle', 'Lightscape_Materials', 'VertexPaint', 
			'reactor', 'Wavefront_Material', 'Texmaps', 'PView_Manager', 'bakeShell', 'Texture_Rotate__base', 'contour_contrast_function_levels', 
			'Scale_Layer', 'Mix__3dsmax', 'Lumination_Render_Element', 'MSEmulator', 'ColladaEffectPass', 'WirePosition', 'StPathClass', 
			'Follow_Bank', 'PaintLayerMod', 'Panorama_Exporter', '3D_StudioExporterPlugin', 'Scene', 'PViewManager', 'MatteShadow', 
			'mib_texture_rotate', 'UV_Coordinate__3dsmax', 'ScaleLayer', 'max_Mix', 'Luminance_Render_Element', 'mib_cie_d', 'SlavePos', 
			'Lines', 'Channel_Info', 'DeletePatch', 'Biped_Object', 'Adobe_Illustrator', 'ColladaXml', 'MtlBaseLib', 
			'PFActionListPool', 'Matte', 'Texture_Remap__base', 'max_UVCoordinate', 'scale_ListDummyEntry', 'Fog__3dsmax', 'lumRenderElement', 
			'shaveMRHairShadows', 'Dynamics_Position_Controller', 'section', 'TreeViewUtil', 'ColladaEffectShader', 'PathDeform', 'ControlContainerGeometry', 
			'DWG_ExportExporterPlugin', 'ColladaAttrib', 'NodeNamedSelSet', 'PFSystemPool', 'InkNPaint', 'mib_texture_remap', 'Checker__3dsmax', 
			'Point4_Layer', 'max_Fog', 'SceneExplorer', 'Illumination_Render_Element', 'mib_bent_normal_env', 'Sunlight_Daylight_Slave_Controller', 'WalledRectangle', 
			'SkinUtilities', 'FFDBox', 'Global_Container', 'DWG_Export', 'blur', 'NamedSelSetList', 'ParticleContainer', 
			'rotation', 'DirectX_9_Shader', 'Water_Surface_Shadow__lume', 'max_Checker', 'Point4Layer', 'Lookup_Background__base', 'Puppet_Scale_List', 
			'Illuminance_Render_Element', 'shaveMRHairIllum', 'SpringPositionController', 'PolymorphicGeomshape', 'SkinTools', 'FFDCyl', 'Delegate', 
			'Wavefront_MaterialExporterPlugin', 'ColladaEffectTechnique', 'DwgGridPacket', 'PF_NotifyDep_Catcher', 'DxMaterial', 'WaterSurfaceShadow', 'Speckle__3dsmax', 
			'point4_ListDummyEntry', 'mib_lookup_background', 'PuppetScaleList', 'illumRenderElement', 'mib_texture_lookup2', 'PositionSpring', 'LinkCompositeshape', 
			'Resource_Collector'
			),
			
		/*
		** Set 6: Max Superclasses
		*/
		6 => array(
			'GeometryClass', 'camera', 'MAXWrapperNonRefTarg', 'MAXWrapper', 'shape', 'colorPicker', 'textureMap', 
			'AttributeDef', 'filter', 'helper', 'light', 'trackViewUtility', 'material', 'modifier', 
			'SoundClass', 'SchematicViewUtility', 'node', 'ExporterPlugin', 'ImporterPlugin', 'MPassCamEffect', 'IKSolver', 
			'ParamBlock2', 'ParamBlock', 'BitmapIO', 'ToneOperator', 'RadiosityEffect', 'BakeElement', 'RenderElement', 
			'RendererClass', 'CustAttrib', 'ReferenceMaker', 'ReferenceTarget', 'Shadow', 'GlobalUtilityPlugin', 'UtilityPlugin', 
			'System', 'TexOutputClass', 'XYZGenClass', 'UVGenClass', 'Shader', 'MasterPointController', 'MasterBlockController', 
			'MorphController', 'Matrix3Controller', 'ScaleController', 'RotationController', 'atmospheric', 'QuatController', 'renderEffect', 
			'PositionController', 'Point4Controller', 'Point3Controller', 'FloatController', 'SpacewarpModifier', 'SpacewarpObject', 'Base_Layer'
			),
			
		/*
		** Set 7: Core Interfaces
		*/
		7 => array(
			'manip', 'ATSOps', 'memStreamMgr', 'SceneEffectLoader', 'MtlBrowserFilter_Manager', 'RadiosityPreferences', 'NetCreateHelpers', 
			'LayerManager', 'cmdPanel', 'BipAnalyzer', 'paramWire', 'IRTShadeTreeCompiler', 'UtilityPanel', 'sceneStateMgr', 
			'FrameTagManager', 'IViewportShadingMgr', 'mental_ray_Preferences', 'actionMan', 'BipFixer', 'mental_ray_Public_Interface', 'MXSDebugger', 
			'blockMgr', 'assemblyMgr', 'simpleFaceManager', 'BipFilter', 'styleMgr', 'schematicviews', 'WorkingPivot', 
			'SkinUtils', 'msZip', 'AssignVertexColors', 'quadMenuSettings', 'defaultActions', 'batchRenderMgr', 'BitmapLayerManager', 
			'SceneExposureControl', 'SubstManager', 'renderPresets', 'visualMS', 'SceneRadiosity', 'BitmapProxyMgr', 'AnimLayerManager', 
			'XMLMaterial', 'trackviews', 'dragAndDrop', 'maxOps', 'FlowRaytraceInterface', 'Hair', 'iParserLoader', 
			'browserMgr', 'pluginManager', 'gridPrefs', 'ChannelInfo', 'SceneExplorerManager', 'particleFlow', 'trackSelectionSets', 
			'colorMan', 'heightManager', 'netrender', 'objXRefs', 'ActionItemOverrideManager', 'HDIKSys', 'custAttribCollapseManager', 
			'radiosityMeshOps', 'medit', 'BoneSys', 'DialogMonitorOPS', 'globalDXDisplayManager', 'srr_exports', 'IKSys', 
			'RingArray', 'autosave', 'FileLinkMgr', 'LoadSaveAnimation', 'dxshadermanager', 'DaylightSystemFactory', 'UIAccessor', 
			'iDisplayGamma', 'BipWorkBench', 'imerge', 'NullInterface', 'objXRefMgr', 'LightingUnits', 'reactionMgr', 
			'MaxNetWorkerInterface', 'walkThroughOps', 'ITabDialogManager', 'InstanceMgr', 's3dexporter', 'RenderEnhancements', 'ATSCustomDepsOps', 
			'menuMan', 'ProjectionIntersectorMgr', 'ProjectionRenderMgr', 'refhierarchy', 'statusPanel', 'timeSlider', 'rollup', 
			'BrushPresetMgr', 'ParamCollectorOps', 'InterfaceIDRegistry', 'tmGizmos'
			),
			
		/*
		** Set 8: Object Sets
		*/
		8 => array(
			'objects','geometry','lights','cameras','helpers','shapes','systems','spacewarps','selection'
			),
			
		/*
		** Set 9: Struct Defs
		*/
		9 => array(
			'renderers', 'mapPaths', 'mocap', 'splineOps', 'pathConfig', 'NodeExposureInterface', 'BezierDefaultParams', 
			'flexOps', 'renderSceneDialog', 'ILayerManager', 'displayColor', 'garmentOps', 'fileProperties', 'scanlineRender', 
			'trackbar', 'ik', 'boolObj', 'stitchOps', 'modPanel', 'units', 'assetBrowser', 
			'schematicView', 'skinOps', 'mouse', 'gw', 'macros', 'mtlBrowser', 'DOF', 
			'meshop', 'cameraFOV', 'symbolicPaths', 'snapMode', 'registry', 'keyboard', 'dotNet', 
			'tabbedDialogs', 'callbacks', 'meshOps', 'internet', 'preferences', 'MatEditor', 'globalMotionClipOps', 
			'envEffectsDialog', 'WAVsound', 'trackView', 'refs', 'biped', 'polyOps', 'xrefs', 
			'cui', 'timeConfiguration', 'hideByCategory', 'windows', 'patch', 'logsystem', 'autoBackup', 
			'viewport', 'LE', 'surfaceArriveBhvr', 'bit', 'listview', 'terrainOps', 'options', 
			'setKey', 'theHold', 'custAttributes', 'delegates', 'ListCtrl', 'polyop', 'AttachCtrl', 
			'patchOps', 'crowds', 'globalVars', 'toolMode', 'LinkCtrl', 'persistents', 'pluginPaths', 
			'vfields', 'systemTools', 'themixer', 'sessionPaths', 'cacheOps', 'xrefPaths', 'TCBDefaultParams', 
			'sysInfo', 'pointCacheMan'
			),
			
		/*
		** Set 10: const reserved globals
		** http://www.scriptspot.com/bobo/mel2mxs/reserved_words.htm
		*/
		10 => array(
			'true', 'false', 'on', 'off', 'pi', 'e', 'red', 'green', 'blue', 'white', 'black',
			'orange', 'yellow', 'brown', 'gray', 'x_axis', 'y_axis', 'z_axis', 'ok',
			'undefined', 'unsupplied', 'dontcollect'
			),

		/*
		** Set 11: system globals (red)
		** Help: 3ds Max System Globals
		*/
		11 => array(
			'lyricDirectory', 'heapSize', 'heapFree', 'inputTextColor', 'outputTextColor', 'messageTextColor', 'stackLimit', 
			'rootNode', 'RenderEffects', 'enableAccelerators', 'listener', 'macroRecorder', 'superclasses', 'rendTimeType', 
			'rendStart', 'rendEnd', 'rendOutputFilename', 'rendNThFrame', 'rendCamNode', 'rendHidden', 'rendUseImgSeq', 
			'rendForce2Side', 'rendImgSeqType', 'rendSaveFile', 'preRendScript', 'rendShowVFB', 'usePreRendScript', 'rendUseDevice', 
			'localPreRendScript', 'rendUseNet', 'postRendScript', 'rendFieldRender', 'usePostRendScript', 'rendColorCheck', 'realTimePlayback', 
			'rendSuperBlack', 'playActiveOnly', 'rendSuperBlackThresh', 'playbackLoop', 'rendAtmosphere', 'animButtonEnabled', 'environmentMap', 
			'rendDitherTrue', 'animButtonState', 'rendDither256', 'flyOffTime', 'rendMultiThread', 'renderDisplacements', 'rendNThSerial', 
			'skipRenderedFrames', 'rendVidCorrectMethod', 'showEndResult', 'rendFieldOrder', 'rendNTSC_PAL', 'rendLockImageAspectRatio', 'rendImageAspectRatio', 
			'rendLockPixelAspectRatio', 'rendPixelAspectRatio', 'rendFileNumberBase', 'rendPickupFrames', 'animationRange', 'sliderTime', 'currentTime', 
			'ticksPerFrame', 'frameRate', 'renderWidth', 'renderHeight', 'renderPixelAspect', 'backgroundImageFileName', 'displaySafeFrames', 
			'productAppID', 'currentMaterialLibrary', 'sceneMaterials', 'hardwareLockID', 'activegrid', 'escapeEnable', 'maxFileName', 
			'maxFilePath', 'manipulateMode', 'scriptsPath', 'editorFont', 'editorFontSize', 'editorShowPath', 'editorTabWidth', 
			'localTime', 'hotspotAngleSeparation', 'backgroundColor', 'ambientColor', 'lightTintColor', 'lightLevel', 'backgroundColorController', 
			'ambientColorController', 'lightTintColorController', 'rendSimplifyAreaLights', 'lightLevelController', 'useEnvironmentMap', 'numAtmospherics', 'numEffects', 
			'trackViewNodes', 'globalTracks', 'videoPostTracks', 'renderer', 'displayGamma', 'fileOutGamma', 'fileInGamma', 
			'subObjectLevel', 'timeDisplayMode', 'numSubObjectLevels', 'activeMeditSlot'
			),

		/*
		** Set 12: maxscript system globals (red)
		** Help: MAXScript System Globals
		*/
		12 => array(
			'currentTime','editorFont','editorFontSize','editorShowPath','editorTabWidth',
			'escapeEnable', 'heapFree', 'heapSize', 'inputTextColor', 'messageTextColor',
			'outputTextColor', 'options.oldPrintStyles', 'options.showGCStatus',
			'stackLimit'
			)

		),
	'SYMBOLS' => array(
		0 => array('(', ')', '[', ']', '{', '}'),
		1 => array('!', '@', '|', '&', "#"),
		2 => array('+', '-', '*', '/', '%'),
		3 => array('=', '<', '>')
		),
	'CASE_SENSITIVE' => array(
		GESHI_COMMENTS => false,
		1 => false,
        2 => false,
        3 => false,
        4 => false
		),
	'STYLES' => array(
		'KEYWORDS' => array(
			1 => 'color: #000066; font-weight: bold;',	// Reserved Keywords (bold dark blue)
			2 => 'color: #000000; font-weight: bold;',	// Rollout (bold black)
			3 => 'color: #3060A0;',						// functions (light blue)
			4 => 'color: #6030A0;',						// MXS Classes (purple)
			5 => 'color: #60A030;',						// Max Classes (green)
			6 => 'color: #0040B0;',						// Max Superclasses (dark blue)
			7 => 'color: #00B040; font-style: italic',	// Core Interfaces (italic aqua)
			8 => 'color: #D0B080; font-style: italic',	// object sets (italic yellow)
			9 => 'color: #804020; font-style: italic',	// Struct Defs (italic brown)
			10 => 'color: #3060A0; font-style: italic',	// const reserved globals (italic light blue)
			11 => 'color: #B00040;',					// Max system globals (red)
			12 => 'color: #B00040;',					// MXS System Globals (red)
			),
		'COMMENTS' => array(
			1 => 'color: #009900;',
			'MULTI' => 'color: #009900;'
			),
		'ESCAPE_CHAR' => array(
			0 => 'color: #000000; font-weight: bold;'
			),
		'BRACKETS' => array(
			0 => 'color: black;'
			),
		'STRINGS' => array(
			0 => 'color: #804080;'
			),
		'NUMBERS' => array(
			0 => 'color: #349DAA;'
			),
		'METHODS' => array(
			1 => 'color: black;'
			),
		'SYMBOLS' => array(
			0 => 'color: #66cc66;'
			),
		'REGEXPS' => array(
			),
		'SCRIPT' => array(
			)
		),
	'URLS' => array(
		),
	'OOLANG' => true,
	'OBJECT_SPLITTERS' => array(
		1 => '.'
		),
	'REGEXPS' => array(
		),
	'STRICT_MODE_APPLIES' => GESHI_NEVER,
	'SCRIPT_DELIMITERS' => array(
		),
	'HIGHLIGHT_STRICT_BLOCK' => array(
		)
);

?>
