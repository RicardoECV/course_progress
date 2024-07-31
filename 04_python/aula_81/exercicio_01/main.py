from Usuario import *
from functions import *
import globais

clean()

print("--- Lista Original ---\n")

for i in globais.usuarios: i.toString()

login_digitado = input("\n- Digite o login que deseja encontrar: ")
print()

if(loginVerifica(login_digitado)):
  print("\n--- Login Encontrado! ---")
else:
  print("--- Login Não Encontrado! ---")

print("\n")