import os
import time
import globais

def loginCheck(login_digitado, senha_digitada):
  for u in globais.usuarios:
    if(u.login == login_digitado and u.pw == senha_digitada):
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