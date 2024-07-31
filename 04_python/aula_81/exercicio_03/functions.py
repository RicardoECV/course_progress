import os
import time
import globais
from Cliente import *

# Funções
def checkCard(cartao, senha):
  for c in globais.clientes:
    if(c.cartao == cartao and c.pin == senha):
      return True
  return False


# Funções auxiliares
def init():
  globais.clientes.append(Cliente("Ricardo", "Sr.", "1111", "1234"))
  globais.clientes.append(Cliente("Manuel", "Sr.", "2222", "1234"))
  globais.clientes.append(Cliente("Ana", "Sra.", "3333", "4321"))

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