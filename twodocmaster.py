#This script is called from 2 doc PHP Script, functions as main program for 2 doc similarity

import extract_text as ext
import twodoc as two
import glob, json, sys

args = str(sys.argv)

l = len(sys.argv)

if l == 3:
	url0 = args[1]
	url1 = args[2]
elif l == 2:
	url0 = args[1]

doclist = glob.glob("uploads/*")

if l == 1:
	[typ0, raw0] = ext.textextract(doclist[0], 0)
	[typ1, raw1] = ext.textextract(doclist[1], 0)
elif l == 2:
	[typ0, raw0] = ext.textextract(doclist[0], 0)
	[typ1, raw1] = ext.textextract(url0, 1)
else:
	[typ0, raw0] = ext.textextract(url0, 1)
	[typ1, raw1] = ext.textextract(url1, 1)

weights = [0.2, 0.3, 0.4, 0.1]
thresh = 1.3
sblock = 4

outlist = [typ0, typ1, doclist[0][7:], doclist[1][7:]]
outlist.extend(two.gen_output(typ0, raw0, typ1, raw1, weights, thresh, sblock))

json.dump(outlist)
