from bs4 import BeautifulSoup
from urllib.request import urlopen
import PyPDF2
import nltk
from functools import reduce
from PIL import Image
import tesserocr
# from preprocess import tokenize_input

def html_to_text(url):
	text_html = urlopen(url).read()
	text_soup = BeautifulSoup(text_html,'lxml')
	for script in text_soup(["script"]):
		script.extract()
	text_raw = text_soup.get_text()
	text_raw = text_raw.split()
	text_raw = ' '.join(text_raw)
	return (text_raw)

def pdf_to_text(path):
	pdf_file = open(path,'rb')
	pdf_read = PyPDF2.PdfFileReader(pdf_file)
	num_pages = pdf_read.getNumPages()
	pdf_out = []

	for i in range(num_pages):
		pdf_page = pdf_read.getPage(i)
		pdf_out.append(pdf_page.extractText())
	
	pdf_out = map(lambda x: x.replace('\n'," "),pdf_out)
	pdf_final = " ".join(pdf_out)
	return (pdf_final)

def image_to_text(path):
	text_image = Image.open(path)
	text_raw = tesserocr.image_to_text(text_image)
	text_raw = text_raw.split()
	text_raw = ' '.join(text_raw)
	return (text_raw)

# print(image_to_text('trial2.jpg'))	
