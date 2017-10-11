import nltk
from collections import Counter
from functools import reduce

def tokenize_input(inp):
	inp = inp.split(".")
	inp = "".join(inp)
	tokens = [word for word in nltk.word_tokenize(inp)]
	return tokens

def form_dict(inp):
	uniq = list(map(lambda x: set(x), inp))
	word_dict = reduce((lambda x,y: x|y),uniq)
	return list(word_dict)

# a1 = ['a','b','a']
# a2 = ['c','c']
# q = [a1,a2]
# print(form_dict(q))	



