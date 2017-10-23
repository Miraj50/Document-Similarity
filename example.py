import sys,json

arg = sys.argv[1]

def readfile(arg):
	with open(arg) as file:
		data = file.read()
		# print(json.dumps(data))
		print(data)
		# return data
	# a = "It works!!"
	# # print(a)
	# print(json.dumps(a))

if __name__ == '__main__':
	readfile(arg)