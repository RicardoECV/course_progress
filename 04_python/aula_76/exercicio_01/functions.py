import os
import time
import globais

def mostrarMenu():  
  print("= = = Gestão de Colaboradores = = =\n")
  print("1 - Registar novo Colaborador.")
  print("2 - Editar Colaborador.")
  print("3 - Apagar Colaborador.\n")  
  print("4 - Listar Colaboradores.\n")
  print("0 - Sair.\n")
  return int(input("Insira a opção: "))


def novoColaborador():
  print("--- Registar Novo Colaborador ---\n")
  nome_digitado = input(f"- Introduza o nome do colaborador: ")
  funcao_digitado = input(f"- Introduza a função do colaborador: ")
  ordenado_digitado = float(input(f"- Introduza o ordenado do colaborador: "))
   
  if(ordenado_digitado <= 0):
    print("\nOrdenado Inválido.")
  else: 
    globais.colaboradores.append(novaPessoa(nome_digitado, funcao_digitado, ordenado_digitado))
  print()
  

def editarColaborador():
  print("--- Editar Colaborador ---\n")
  exibirColaboradores(globais.colaboradores, False)
  num_id = int(input("\nInsira o id que deseja editar: "))
  if(num_id >= 0 and num_id < len(globais.colaboradores)):
    print("\n--- Editar ---\n")
    print("1 - Nome.")
    print("2 - Cargo.")
    print("3 - Ordenado.\n")
    print("0 - Cancelar\n")    
    num_submenu = int(input(f"Opção: "))
    print()
    if(num_submenu == 1):
      nome = input("Introduza o novo nome: ")
      globais.colaboradores[num_id][0] = nome
      print("\nSucesso.")

    elif(num_submenu == 2):
      cargo = input("Introduza o novo nome: ")     
      globais.colaboradores[num_id][1] = cargo
      print("\nSucesso.")

    elif(num_submenu == 3):
      ordenado = float(input("Introduza o novo nome: "))     
      globais.colaboradores[num_id][2] = ordenado
      print("\nSucesso.")

    elif(num_submenu == 0):
      print("Cancelado.")
    
  else: print("\nOpção Inválida\n")
  print()


def apagarColaborador():
  print("--- Apagar Colaborador ---\n")
  exibirColaboradores(globais.colaboradores, False)
  print()
  num_id = int(input("Insira o id que deseja apagar: "))
  if(num_id >=0 and num_id < len(globais.colaboradores)): 
    pessoa_apagada = globais.colaboradores.pop(num_id)       
    print(f"\n--- Sucesso! Apagou ({pessoa_apagada[0]}) ---\n")
  else: print("\nOpção Inválida\n")



def calcularOrdenados(pessoas):
  x = 0
  for i in range(len(pessoas)):
    x += pessoas[i][2] 
  return x


def novaPessoa(nome, idade, morada):
  pessoa_individual = [nome, idade, morada]
  return pessoa_individual


def toString(i, pessoa_individual):
  print(f"{i} - Nome: {pessoa_individual[0]} | Função: {pessoa_individual[1]} | Ordenado: {pessoa_individual[2]:.2f} €")


def exibirColaboradores(pessoas, menu):
  for i in range(len(pessoas)): toString(i, pessoas[i])
  if(menu):
    print(f"\nTotal de Colaboradores: {i+1}")
    print(f"Ordenado total da equipa: {calcularOrdenados(globais.colaboradores):.2f} €\n")
    

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