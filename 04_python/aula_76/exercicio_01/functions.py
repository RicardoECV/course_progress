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
  existente = False
  print("--- Registar Novo Colaborador ---\n")
  nome_digitado = input(f"- Introduza o nome do colaborador: ")
  funcao_digitado = input(f"- Introduza a função do colaborador: ")
  ordenado_digitado = float(input(f"- Introduza o ordenado do colaborador: "))

  for i in range(len(globais.colaboradores)):
    if(nome_digitado == globais.colaboradores[i][0]): 
      existente = True
         
  if(ordenado_digitado <= 0):
    print("\n Ordenado Inválido.")
    
  elif(existente == True):
    print("\nNome já existente.")

  else:
    print("\n --- Sucesso ---")
    globais.colaboradores.append(novaPessoa(nome_digitado, funcao_digitado, ordenado_digitado))
  print()
  

def editarColaborador():
  print("--- Editar Colaborador ---\n")
  exibirColaboradores(False)
  num_id = int(input("\nInsira o id que deseja editar: ")) - 1

  if(num_id >= 0 and num_id < len(globais.colaboradores)):
    print("\n--- Editar ---\n")
    print("1 - Nome.")
    print("2 - Cargo.")
    print("3 - Ordenado.\n")
    print("0 - Cancelar\n")    
    num_submenu = int(input(f"Opção: "))
    print()
    c = globais.colaboradores[num_id]

    if(num_submenu == 1):
      c[0] = input("Introduza o novo nome: ")      
      print("\n--- Sucesso ---")

    elif(num_submenu == 2):
      c[1] = input("Introduza o novo cargo: ")
      print("\n--- Sucesso ---")

    elif(num_submenu == 3):
      c[2] = float(input("Introduza o novo ordenado: ")) 
      print("\n--- Sucesso ---")

    elif(num_submenu == 0):
      print("Cancelado.")
    
    else: print("\nOpção Inválida\n")
  else: print("\nOpção Inválida\n")
  print()


def apagarColaborador():
  print("--- Apagar Colaborador ---\n")
  exibirColaboradores(False)
  print()
  num_id = int(input("Insira o id que deseja apagar: ")) - 1
  if(num_id >=0 and num_id < len(globais.colaboradores)): 
    pessoa_apagada = globais.colaboradores.pop(num_id)       
    print(f"\n--- Sucesso! Apagou ({pessoa_apagada[0]}) ---\n")
  else: print("\nOpção Inválida\n")


def novaPessoa(nome, idade, morada):  
  return [nome, idade, morada]


def toString(i, pessoa_individual):
  print(f"{i+1} - Nome: {pessoa_individual[0]} | Função: {pessoa_individual[1]} | Ordenado: {pessoa_individual[2]:.2f} €")


def exibirColaboradores(menu):
  if(menu):
    print("--- Lista de Colaboradores ---\n")
    ordenado = 0
 
  for i in range(len(globais.colaboradores)): 
    toString(i, globais.colaboradores[i])
    if(menu):
      ordenado += globais.colaboradores[i][2]
  
  if(menu):
    print(f"\nTotal de Colaboradores: {i+1}")
    print(f"Ordenado total da equipa: {ordenado:.2f} €\n")
    

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