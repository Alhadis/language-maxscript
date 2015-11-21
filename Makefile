UTILS        := utils
MXS_DUMP     := lists/all.txt

terms:
	@$(UTILS)/extract.js $(MXS_DUMP) VARIABLE Const

.PHONY: terms
