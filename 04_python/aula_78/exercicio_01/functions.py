import os
import time
import globais

def mostrarMenu():
  loading(globais.t, "Aguarde", 3)
  print("--- PETSHOP ---\n")
  print("1 - Registar PET")
  print("2 - Editar PET")
  print("3 - Apagar PET")
  print("4 - Listar todos os PETs\n")
  print("0 - Sair")
  return int(input("Opção: "))

def registarPet():
  print("--- Registo de PET ---\n")
  nome = input("Insira o nome do novo PET: ")
  raca = input("Insira a raça do novo PET: ")
  peso = float(input("Insira o peso do novo PET: "))
  cor = input("Insira a côr do pelo do novo PET: ")
  globais.pets.append(novoPet(nome, raca, peso, cor))
  print("\n --- Sucesso ---")

def editarPet():
  print("--- Editar PET ---")
  mostrarPets(False)
  num_pet = int(input("Insira o número do PET que deseja apagar: "))
  pet = globais.pets[num_pet]
  if(num_pet >= 0 and num_pet < len(globais.pets)):
    print("Edição do PET\n")
    print("1 - Editar o nome.\n")
    print("2 - Editar a raça.\n")
    print("3 - Editar o peso.\n")
    print("4 - Editar a côr.\n")
    opcao = int(input("Opção: "))

    if(opcao == 1):
      pet["nome"]
    
   

def apagarPET():
  print("--- Apagar PET ---\n")
  mostrarPets(False)
  num_pet = int(input("Insira o número do PET que deseja apagar: "))
  if(num_pet >= 0 and num_pet < len(globais.pets)):
    resposta = input(f"\nDeseja apagar o PET{globais.pets[id]}")
    if(resposta.lower() == "sim"):
      globais.pets.pop(id)
      print("\n --- Sucesso ---")
    else: print("\n--- Operação Anulada ---")
  else: print("\n Número do PET inválido")    


def mostrarPets(menu):
  if(menu): print("--- Lista de PETs ---\n")
  for i in range(len(globais.pets)): toString(i, globais.pets)
# Funções auxiliares

def novoPet(nome, raca, peso, cor):
  novo_pet = {
    "nome": nome,
    "raca": raca,
    "peso": peso,
    "cor": cor
  }  
  return novo_pet 

def toString(i, pet):
  print(f"--- {i} {pet['nome']} ---")
  print(f"Raça: {pet['raca']} ---")
  print(f"Peso: {pet['peso']} ---")
  print(f"Côr do pelo: {pet['cor']} ---")

def init():
  globais.pets.append(novoPet("Alex", "Scottich Fold", 4.5, "Cinzento"))
  globais.pets.append(novoPet("Manel", "Egipsio", 3.8, "Creme"))
  globais.pets.append(novoPet("Bianca", "Gato Comum", 5.1, "Branca"))


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