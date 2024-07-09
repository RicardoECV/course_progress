import os

def calcMedia(nota_1, nota_2, nota_3):
  x = ((nota_1 * 2) + (nota_2 * 3) + (nota_3 * 5)) / 10
  return x
  
def calcNum(num_1):
  if (num_1 > 10):
    print("É MAIOR QUE 10!")
  else:
    print("NÃO É MAIOR QUE 10!")

def calcPos(num_2):
  if(num_2 >= 0):
    print("Positivo!")
  else:
    print("Negativo!")

def calcMaca(macas):
  if(macas >= 12):
    x = macas
  else:
    x = macas * 1.3
  return x

def calcAprov(nota_1, nota_2):
  x = (nota_1 + nota_2) / 2
  if(x >= 6):
    print(f"Aprovado com média {x}.")
  else:
    print(f"Reprovado com média {x}.")

def calcVotar (ano_a, ano_n):
  x = ano_a - ano_n
  if(x >= 18):
    print("Pode votar.")
  else:
    print("Não pode votar.")

def calcMaior(num_1, num_2):
  print(f"{max(num_1, num_2)}")
 

def calcContagem(num_1, num_2):
  if(num_1 > num_2):
    print(f"{num_1} {num_2}")
  elif(num_2 > num_1):  
    print(f"{num_2} {num_1}")

def calcDuracao(hora_i, hora_f):
  if(hora_i <= hora_f):
    return (24 - (hora_i - hora_f))    
  else:
    return (hora_f - hora_i)
  

def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")
