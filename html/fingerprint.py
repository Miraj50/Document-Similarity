import nltk, utils, math, multiset

def hash_list(a, hash_func, n):
	gramsA = utils.ngramize(a, n)
	hashA = list(map(hash_func, gramsA))
	
	return hashA


def ngrams_list(hashes, n=5):
	l = len(hashes)
	if l < n:
		yield hashes
	else:
		for i in range(l - n + 1):
			yield hashes[i:i + n]

def window_min(window):
	return min(window, key=lambda x: (x[1], -x[0]))


def finger2docs(a, b, hash_func = utils.hash_md5, n = 2, m = 3):
	hothashA = set(filter(lambda x: x%m == 0, hash_list(a, hash_func, n)))
	hothashB = set(filter(lambda x: x%m == 0, hash_list(b, hash_func, n)))

	u = len(hothashA.intersection(hothashB))
	return 2*u/(len(hothashA) + len(hothashB))


def winnow2docs(a, b, hash_func = utils.hash_md5, n = 3, k = 6):
	hothashA = set(map(window_min, ngrams_list(list(enumerate(hash_list(a, hash_func, n))), k)))
	hothashB = set(map(window_min, ngrams_list(list(enumerate(hash_list(b, hash_func, n))), k)))

	hothashA = multiset.Multiset(dict(hothashA).values())
	hothashB = multiset.Multiset(dict(hothashB).values())
	u = len(hothashA.intersection(hothashB))
	return 2*u/(len(hothashA) + len(hothashB))
	



	

	

