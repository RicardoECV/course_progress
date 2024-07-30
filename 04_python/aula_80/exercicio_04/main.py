from functions import *
from Usuario import *
import globais

clean()

usuarios = [
  Usuario("Ricardo Valente", "ricardov", "teste1"),
  Usuario("Antonio Rodrigo", "antonior", "teste2"),
  Usuario("Maria Emanuel", "mariae", "teste3") 
]

while(True):
  clean()
  print("--- Lista Original ---\n")
  for u in usuarios: u.toString()

  print()

  login_digitado = input("- Login: ")
  senha_digitado = input("- Senha: ")



print("\n")