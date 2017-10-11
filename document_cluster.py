import numpy as np
from preprocess import form_dict
from utils import calctfidf
import random
import warnings


def k_means(setd):
	num_cluster = 2
	word_dict = form_dict(setd)
	inp_vector = np.zeros((len(setd),len(word_dict)))
	for p1,doc in enumerate(setd):
		for p2,word in enumerate(word_dict):
			inp_vector[p1][p2] = calctfidf(setd,doc,word)
	cluster_vector = np.zeros((num_cluster,len(word_dict)))
	rand_init = random.sample(range(len(setd)),num_cluster)
	cluster_vector = inp_vector[rand_init , :]
	cluster_norm = np.linalg.norm(cluster_vector,axis=1)
	cluster_assign = np.zeros(len(setd))
	for i in range(50):
		for num_row,row in enumerate(inp_vector):
			dist_vector = np.divide((np.dot(row,np.transpose(cluster_vector))/np.linalg.norm(row)),cluster_norm)
			cluster_assign[num_row] = np.argmax(dist_vector)
		for j in range(num_cluster):
			cluster_alloc = inp_vector[np.where(cluster_assign == j)]
			with warnings.catch_warnings():
				warnings.simplefilter("ignore", category=RuntimeWarning)
				cluster_vector[j] = np.mean(cluster_alloc,axis=0)				
	return cluster_assign	

# doclist = [['d','b','c'],['c','c'],['c','b','d',],['c','c']]
# print(k_means(doclist))




	
