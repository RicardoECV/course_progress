import os

def calcAnt(x):
  x -= 1
  return x

def calcArea(largura, comprimento):
  x = largura * comprimento
  return x

def calcIdade(anos, meses, dias):
  z = dias + (anos * 365) + (meses * 30)
  return z

def calcEleitores(total, votosB, votosN, votosV):
  b = (votosB*100) / total
  n = (votosN*100) / total
  v = (votosV*100) / total
  print(f"Total Eleitores: {total}\n")
  print(f"Total Votos Brancos: {b:.0f}%")
  print(f"Total Votos Nulos: {n:.0f}%")
  print(f"Total Votos Válidos: {v:.0f}%")

def calcSalario(sal, ajuste):
  x = sal * (ajuste * 0.01)
  return (x + sal)

def calcCusto(carro):
  x = carro * 0.28
  y = carro * 0.45
  return (carro + x + y)

def calcVenda(carros, total, salF, venda):
  x = (venda * carros)
  y = total * 0.05
  return (x + y + salF)


def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")
