import os
import time


def listaAlunos(num_alunos):
  lista = []
  for i in range(num_alunos):
    lista.append(input(f"Insira o nome do {i+1}º aluno: "))
  return lista



# Funções especiais
def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def sleep(t): time.sleep(t)

def loading(t, frase):
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