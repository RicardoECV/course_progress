import os
import time
import globais
from Usuario import *

# Funções
def loginVerifica(login_digitado):
  for u in globais.usuarios:
    if(u.login == login_digitado):
      u.toString()      
      return True
  return False
    
# Funções especiais
def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def sleep(t): time.sleep(t)

def loading(t, frase, x):
  clean()
  print(frase, end="", flush=True)
  sleep(t)
  for loop in range(x):    
    print(".", end="", flush=True)
    sleep(t)  
     
def press_enter():
  input("Carregue ENTER: ")