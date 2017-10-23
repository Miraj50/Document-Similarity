#Python script called by cluster_op.php script to return list of clusters of documents

import extract_text as ext
import document_cluster as clu
import glob, json, os

#args = str(sys.argv)
#
#l = len(sys.argv)
#
#if l == 3:
#	url0 = args[1]
#	url1 = args[2]
#elif l == 2:
#	url0 = args[1]

doclist = [fil for fil in os.listdir("./uploads/")]
n = len(doclist)

pathlist = ["./uploads/" + filen for filen in doclist]

documents = [ext.textextract(path, 0) for path in pathlist]

clusters = clu.k_means(documents)
clusters = [[doclist[i], clusters[i]] for i in range(n)]

keys = list(map(lambda x:x[1], clusters))
newlist = [[y[0] for y in clusters if y[1]==x] for x in keys]

json.dumps(newlist)


