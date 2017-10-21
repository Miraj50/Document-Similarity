from collections import Counter
from nltk.corpus import stopwords
from nltk.stem import PorterStemmer
from nltk import word_tokenize
from nltk import ngrams
import math
import hashlib
from functools import reduce

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
	return list(map(lambda x: ''.join(x), list(ngrams(''.join(a), n))))
	

def hash_md5(a):
	return int(hashlib.md5(a.encode()).hexdigest(), 16)

def hash_sha256(a):
	return int(hashlib.sha256(a.encode()).hexdigest(), 16)

def preprocess(inp):
	step1 = lower_case(inp)
	step2 = stop_word_rem(step1)
	step3 = tokenize_input(step2)
	return step3

def tokenize_input(inp):
	tok_inp = list(map(lambda x: word_tokenize(x),inp))
	return tok_inp

def form_dict(inp):
	uniq = list(map(lambda x: set(x), inp))
	word_dict = reduce((lambda x,y: x|y),uniq)
	return list(word_dict)

def lower_case(inp):
	lower_rem_inp = [i.lower() for i in inp]
	return lower_rem_inp

def stop_word_rem(inp):
	all_words = set(stopwords.words('english'))
	all_words.update(['.','"',"'",'?',',',':',';',')','(','}','{',']','['])
	def fmap(x):
		y = [w for w in x.split() if w not in all_words]
		ans = ' '.join(y)
		return ans
	stop_rem_inp = list(map(fmap,inp))
	return(stop_rem_inp)

def	stemming(inp):
	p = PorterStemmer()
	def fmap(x):
		y = [p.stem(w) for w in x.split()]
		ans = ' '.join(y)
		return ans
	stem_inp = list(map(fmap,inp))
	return stem_inp

	



