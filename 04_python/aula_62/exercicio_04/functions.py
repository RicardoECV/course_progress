import os

def saudar():
  print("tyty")

def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")
