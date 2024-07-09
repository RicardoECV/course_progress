import os
import time

def aprov(i, c):
  if(i >= 18 and c.lower() == "sim"):
    return "APROVADO PARA O ESTÁGIO"
  elif(i >= 18 and c.lower() == "nao"):
    return "NÃO APROVADO PARA O ESTÁGIO"
  elif(i < 18 and c.lower() == "sim"):
    return "APROVADO PARA A ESCOLA DE PROGRAMAÇÃO"
  elif(i < 18 and c.lower() == "nao"):
    return "NÃO APROVADO PARA A ESCOLA DE PROGRAMAÇÃO"
  elif(i < 12):
    return "NÂO APROVADO"
  else:
    return "ERRO NOS DADOS INFORMADOS, TENTE NOVAMENTE"

def analisar(t):
  clean()
  print("A analisar")
  sleep(t)
  clean()
  print("A analisar.")
  sleep(t)
  clean()
  print("A analisar..")
  sleep(t)
  clean()
  print("A analisar...")
  sleep(t)
  clean()


# Funções especiais
def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def sleep(t): time.sleep(t)