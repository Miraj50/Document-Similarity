import utils
import numpy as np
from numpy import linalg as la

def cos2docs(a, b):
	(f1, f2) = utils.tf2docs(a, b)

	f1 = np.asarray(f1)
	f2 = np.asarray(f2)

	mod1 = la.norm(f1)
	mod2 = la.norm(f2)
	dot = np.matmul(f1, f2)
	return dot/(mod1*mod2)


def jaccard2docs(a, b):
	setA = set(a)
	setB = set(b)
	
	return len(setA.intersection(setB))/len(setA.union(setB))


def hamming2docs(a, b):
	(f1, f2) = utils.tf2docs(a, b)

	return sum(abs(it1 - it2) for it1, it2 in zip(f1, f2))

	
	
	

