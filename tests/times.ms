-- From 3DS Max's documentation:
-- http://help.autodesk.com/view/3DSMAX/2015/ENU/?guid=__files_GUID_51429B01_2FC6_4746_9E88_5EB5D93056CC_htm
2.5s -- 2.5 seconds
1m15s -- 1 minute 15 seconds
2m30s5f2t -- 2 minutes 30 seconds 5 frames 2 ticks
125f -- 125 frames
17.25f -- 17.25 frames
1f20t -- 1 frame 20 ticks
2:10.0 -- 2 minutes 10 seconds 0 frames (SMPTE)
0:0.29 -- 29 frames (SMPTE)






-- Minutes/seconds/frames/ticks
nope2.m2m
2.2m
2.m2.2f
2.m
2.m.f.s
.0m.f.s
.m.f.s     -- Invalid
.m.0f0.0s  -- Invalid
.m .0f0.0s -- Valid with separating whitespace
.3f.2f
.52m0.98s
.0m.f.0s


-- SMPTE values
3:3.3
3:0.0
3:0. 
nope3:2.2  -- Invalid
nope3:.    -- Invalid
yep 3:.    -- Valid with separating whitespace
3:0.0
3:.0
3:.



-- Normalised time value
0.45n
0n
0.n
.0n
nope0.45n    -- Invalid
nope0 .45n   -- Valid
