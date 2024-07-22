import os
import time
import globais

def mostrarMenu():  
  print("= = = Lista de Pessoas = = =\n")
  print("1 - Registar nova Pessoa.")
  print("2 - Editar Pessoa.")
  print("3 - Apagar Pessoa.\n")  
  print("4 - Listar Pessoas.\n")
  print("0 - Sair.\n")
  return int(input("Insira a opção: "))

def registarAluno():
  print("--- Registo de uma Nova Pessoa ---\n")
  globais.alunos.append(input("Insira o nome da nova pessoa: "))
  print("\n--- Sucesso! ---\n")

def editarAluno():
  print("--- Editar uma Pessoa ---\n")
  listarAlunos()
  num_aluno = int(input("Digite o número da pessoa que pretende editar: ")) -1
  print()
  if(num_aluno >=0 and num_aluno < len(globais.alunos)):
    condicao = input(f"Deseja editar a Pessoa ({globais.alunos[num_aluno]}) ?(sim ou nao)")
    print()
    if(condicao.lower() == "sim"):
      globais.alunos[num_aluno] = input("Insira o novo nome: ")
      print("\n--- Sucesso! ---")
    else:
      print("Pessoa não editada!")
  else:
    print("--- Número Inválido! ---\n")
  
def apagarAluno(): 
  print("--- Apagar uma Pessoa ---\n")
  listarAlunos()
  num_aluno = int(input("Digite o número da pessoa que pretende apagar: ")) -1
  print()
  if(num_aluno >=0 and num_aluno < len(globais.alunos)):
    globais.alunos.pop(num_aluno)
    print("\n--- Sucesso! ---")
  else:
    print("--- Número Inválido! ---\n")

def listarAlunos():  
  for i in range(len(globais.alunos)):
    print(f"{i+1} - {globais.alunos[i]}")
  print()

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