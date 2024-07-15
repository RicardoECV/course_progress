import os
import time



# Funções especiais
def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def sleep(t): time.sleep(t)

def analisar(t, frase):
  clean()
  print(frase, end="", flush=True)
  sleep(t)  
  print(".", end="", flush=True)
  sleep(t)  
  print(".", end="", flush=True)
  sleep(t)  
  print(".", end="", flush=True)
  sleep(t)
  clean()