from functions import *

clean()

while(True):

  clean()
  print("--- Login ---\n")

  login_digitado = input("- Login: ")
  senha_digitada = input("- Senha: ")

  if(loginCheck(login_digitado, senha_digitada)):
    print("\n --- Sucesso! ---")
    break
  else:
    print("\n --- Login Inválido! ---\n")

  press_enter()


print("\n")