from bs4 import BeautifulSoup
from urllib.request import urlopen
import PyPDF2
import nltk
from functools import reduce
from PIL import Image
import tesserocr
import os
import re
# from preprocess import tokenize_input

def textextract(path,flag):
	if flag==1:
		return html_to_text(path)
	elif flag==0:	
		file_name, ext = os.path.splitext(path)
		if ext.lower()==".pdf":
			return pdf_to_text(path)
		elif ext.lower()==".jpg" or ext.lower()==".jpeg" or ext.lower()==".png":
			return image_to_text(path) 	
		elif ext.lower()==".txt":	
			return txt_to_text(path)


def html_to_text(url):
	text_html = urlopen(url).read()
	text_soup = BeautifulSoup(text_html,'lxml')
	for script in text_soup(["script"]):
		script.extract()
	text_raw = text_soup.get_text()
	text_raw = text_raw.split()
	text_raw = ' '.join(text_raw)
	text_raw = text_raw.split(".")
	text_final = [x for x in text_raw if x!=""]
	return 0,text_final

def pdf_to_text(path):
	pdf_file = open(path,'rb')
	pdf_read = PyPDF2.PdfFileReader(pdf_file)
	num_pages = pdf_read.getNumPages()
	pdf_out = []

	for i in range(num_pages):
		pdf_page = pdf_read.getPage(i)
		pdf_out.append(pdf_page.extractText())
	
	pdf_out = list(map(lambda x: x.replace('\n'," "),pdf_out))
	pdf_final = " ".join(pdf_out)
	pdf_final = pdf_final.split(".")
	pdf_final = [x for x in pdf_final if x!=""]
	return 0,pdf_final

def image_to_text(path):
	text_image = Image.open(path)
	text_raw = tesserocr.image_to_text(text_image)
	text_raw = text_raw.split()
	text_raw = ' '.join(text_raw)
	text_raw = text_raw.split(".")
	text_final = [x for x in text_raw if x!=""]
	return 0,text_final

def txt_to_text(path):
	file = open(path,"r")
	text_raw = file.read()
	text_raw = re.split(r'\n+',text_raw)
	text_final = [x for x in text_raw if x!=""]
	return 1,text_final	


# print(textextract("https://en.wikipedia.org/wiki/Sherrod_Small",1))
