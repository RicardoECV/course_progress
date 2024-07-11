import os
import time

def calcTab(x, t):
  i = 0
  while (i <= 10):
    print (f"{i:>2} x {x} = {i*x}")
    i += 1
    sleep(t)

# Funções especiais
def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def sleep(t): time.sleep(t)

def analisar(t, frase):
  clean()
  print(frase, end="", flush=True)
  sleep(t)  
  print(".", end="", flush=True)
  sleep(t)  
  print(".", end="", flush=True)
  sleep(t)  
  print(".", end="", flush=True)
  sleep(t)
  clean()  