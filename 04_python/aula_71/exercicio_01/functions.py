import os
import time
import globais

def menu():
  print("=== MULTIBANCO ===\n")
  print(f"Bem vindo {globais.nome}\n")
  print(f"Saldo actual: {globais.saldo:.2f}\n")
  print("1 - Levantar.")
  print("2 - Depositar.")
  print("3 - Pagamentos.")
  print("4 - Historico.")
  print()
  print("0 - Sair\n") 
  return (int(input("- Opção: ")))

def depositar():
  print("--- Depósitos ---\n")
  valor = float(input("Qual o valor a depositar? "))
  if(valor < 0):
    print()
    print("Opção inválida.")
    globais.historico += f"Tentativa de depósito => {valor:.2f}\n"

  else:    
    globais.saldo += valor
    globais.historico += f"Deposito => {valor:.2f}\n"
    print()
    print("--- Sucesso ---\n")
    print(f"Valor actual:{globais.saldo:.2f}\n")
    press_enter()


def levantar():
  print("--- Levantamentos ---\n")
  valor = float(input("Qual o valor a levantar? "))
  if(valor < 0 or globais.saldo < valor):
    print()
    print("Opção inválida.")
    globais.historico += f"Tentativa de levantamento => {valor:.2f}\n"

  else:    
    globais.saldo -= valor
    globais.historico += f"Levantamento => {valor:.2f}\n"
    print()
    print("--- Sucesso ---\n")
    print(f"Valor actual:{globais.saldo:.2f}\n")
    press_enter()


def pagamentos():
  print("--- Pagamentos ---\n")
  pagamento = input("Insira o nome do destinatário do pagamento: ")
  valor = float(input("Qual o valor do pagamento? "))  
  if(valor < 0 or globais.saldo < valor):
    print()
    print("Opção inválida.")
    globais.historico += f"Tentativa de pagamento => {valor:.2f}\n"

  else: 
    globais.saldo -= valor 
    globais.historico += f"Pagamento de {pagamento} => {valor:.2f}\n"
    print()
    print("--- Sucesso ---\n")    
    print(f"Valor actual:{globais.saldo:.2f}\n")
    press_enter()

def exibitHistorico ():
  print("--- Histórico ---")
  print(globais.historico)  
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