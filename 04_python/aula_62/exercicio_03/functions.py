import os

def calcF(temperatura):	
	f = temperatura * 1.8 + 32
	return f

def calcK(temperatura):	
	k = temperatura + 273.15
	return k

def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")
