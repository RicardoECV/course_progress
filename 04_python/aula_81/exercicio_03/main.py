from functions import *
from Cliente import *

clean()
init()

while(True):
  clean()
  print("--- Multibanco Python! ---\n") 

  for c in globais.clientes: c.toString()

  cartao_digitado = input("Insira o número do cartão: ")
  senha_digitada = input("Insira o pin do cartão: ")
  if(checkCard(cartao_digitado, senha_digitada)):
    print("Login Com Sucesso!")
    break
  else: 
    print ("Pin Errado!")
    press_enter()

print("Bem Vindo") 

print("\n")