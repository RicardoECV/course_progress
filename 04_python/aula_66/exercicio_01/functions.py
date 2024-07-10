import os
import time
import math

def menoInicial():
  print("{:=^40}".format(" Cálculo de Áreas com Funções ") + "\n")
  print("{:-^25}".format(" Escolha um opção ") + "\n")
  print("(t) para triângulos.")
  print("(r) para rectângulos.")
  print("(c) para circulo.\n")

# --- --- --- Calculo de Áreas --- --- ---

def calcTri(b, a):
  return (b * a) / 2

def calcRec(c, l):
  return (c * l)

def calcCirc(r):
  return (math.pi * r**2)

# --- --- --- Fim do calculo de áreas --- --- ---

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