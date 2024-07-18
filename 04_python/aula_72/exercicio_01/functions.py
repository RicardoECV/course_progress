import os
import time
import globais

def menu():
  print("=== Padaria do Python ===\n")  
  print("1 - Vender.")
  print("2 - Ver histórico.")
  print("0 - Sair\n") 
  return (int(input("- Opção: ")))

def vendas():
  print("--- Vendas ---\n")
  venda = input("Insira o nome da venda: ")
  valor = float(input("Insira o valor do produto: "))  
  if(valor < 0):
    print()
    print("Opção inválida.")
    
  else: 
    globais.saldo += valor 
    globais.historico += f"Venda de {venda} => {valor:.2f}\n"
    print()
    print("--- Sucesso ---\n")  
    press_enter()

def exibitHistorico ():
  print("--- Histórico de Vendas ---\n")
  if (globais.historico == ""):
    print("\nSem histórico de vendas.")
  print(globais.historico) 
  print(f"\nValor total de vendas: {globais.saldo:.2f}\n") 
  press_enter()

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