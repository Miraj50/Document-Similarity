from collections import Counter
import math
import nltk
import hashlib

def findtf(list1,  word):
	return list1.count(word)/len(list1)


def tf2docs(list1, list2):
	freq1 = Counter(list1)
	freq2 = Counter(list2)
	
	word_dict = list( freq1.keys() | freq2.keys() )

	one = [freq1.get(item, 0) for item in word_dict] 
	two = [freq2.get(item, 0) for item in word_dict]

	return one, two


def numocc(doclist, word):
	return sum(1 for item in doclist if word in item)


def findidf(doclist, word):
	return math.log(len(doclist) / (1 + numocc(doclist, word)))


def calctfidf(doclist, doc, word):
	return findtf(doc, word)*findidf(doclist, word)


def ngramize(a, n):
	return list(map(lambda x: ''.join(x), list(nltk.ngrams(''.join(a), n))))
	

def hash_md5(a):
	return int(hashlib.md5(a.encode()).hexdigest(), 16)

def hash_sha256(a):
	return int(hashlib.sha256(a.encode()).hexdigest(), 16)
	



