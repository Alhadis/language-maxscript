UTILS        := utils
EXTRACT      := $(UTILS)/extract.js
MXS_DUMP     := lists/all.txt

terms:
	@$(EXTRACT) $(MXS_DUMP) FUNCTION Normal


# Print a decorated inheritance tree to illustrate MAXScript topology
graph:
	@$(EXTRACT) $(MXS_DUMP) --graph


.PHONY: terms graph
