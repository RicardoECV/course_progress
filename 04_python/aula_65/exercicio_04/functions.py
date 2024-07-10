import os
import time

def aprov(i, c):
  if(c.lower() == "sim"):
    if(i >= 18):
      return "APROVADO PARA O ESTÁGIO"  
    else:
      return "APROVADO PARA A ESCOLA DE PROGRAMAÇÃO"
    
  elif(c.lower() == "nao"):
    if(i >= 18):
      return "NÃO APROVADO PARA O ESTÁGIO DE PROGRAMAÇÃO" 
    else:
      return "NÃO APROVADO PARA A ESCOLA DE PROGRAMAÇÃO" 
  
  else:
    return "ERRO NOS DADOS INFORMADOS, TENTE NOVAMENTE"

def analisar(t):
  clean()
  print("A analisar", end="", flush=True)
  sleep(t)  
  print(".", end="", flush=True)
  sleep(t)  
  print(".", end="", flush=True)
  sleep(t)  
  print(".", end="", flush=True)
  sleep(t)
  clean()


# Funções especiais
def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def sleep(t): time.sleep(t)