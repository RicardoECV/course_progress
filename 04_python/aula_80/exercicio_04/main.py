from functions import *
from Usuario import *
import globais

clean()

while(True):

  clean()
  print("--- Lista Original ---\n")
  for u in globais.usuarios: u.toString()

  print()

  login_digitado = input("- Login: ")
  senha_digitado = input("- Senha: ")

  if(loginCheck(login_digitado, senha_digitado)):
    print("\n --- Sucesso! ---")
    break
  else:
    print("\n --- Login Inválido! ---")

  press_enter()

print("\n")