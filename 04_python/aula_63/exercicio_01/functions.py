import os

def saudar():
  print("tyty")

def calcSoma():
  x = float(input("Insira um número: "))
  y = float(input("Insira um número: "))
  soma = x + y
  print(f"A soma é {soma}")

def calcDivisao(x, y):
  div = x / y
  print(f"A divisão é: {div}")


  

def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")
