#gen_output returns list of 4-tuples specifying section number and content from both documents (outlist)
#Includes helper functions

import fingerprint, utils, similarity
import numpy as np

def weighted_index(a, b, weights):
	return weights[0]*similarity.cos2docs(a, b) + weights[1]*similarity.jaccard2docs(a, b) + weights[2]*fingerprint.finger2docs(a, b) + weights[3]*fingerprint.winnow2docs(a, b)

def para2doc(p, doc, weights):
	return list(map(lambda x: weighted_index(p, x, weights), doc))

def gen_sectionarray(a, b, weights):
	return list(map(lambda x: para2doc(x, b, weights), a))

def threshold(indexarr, t):
	nparray = np.asarray(indexarr)
	m = np.mean(nparray)
	return np.argwhere(nparray > m)
	
def gen_sent_blocks(doc, sb):
	return list(map(lambda x: ' '.join(x), [doc[x:x+sb] for x in range(len(doc) - sb + 1)]))

def gen_output(t0, raw0, t1, raw1, weights, t, sb):
	if(t0 == 0):
		doca = gen_sent_blocks(raw0, sb)
	else:
		doca = raw0
	yth
	if(t1 == 0):
		docb = gen_sent_blocks(raw1, sb)
	else:
		docb = raw1

	paralista = utils.preprocess(doca)
	paralistb = utils.preprocess(docb)
	blank = ['']
	blank.extend(doca)
	doca = blank
	blank = ['']
	doca.extend(blank)
	blank.extend(docb)
	docb = blank
	docb.extend([''])
	indexarr = gen_sectionarray(paralista, paralistb, weights)
	outlist = []
	indices = threshold(indexarr, t)
	for elem in indices:
		e0 = elem[0]
		e1 = elem[1]
		outlist.append([e0, doca[e0] + '^' + doca[e0+1] + '^' + doca[e0+2], e1, doca[e1] + '^' + doca[e1+1] + '^' + doca[e1+2]])
	return outlist
	


