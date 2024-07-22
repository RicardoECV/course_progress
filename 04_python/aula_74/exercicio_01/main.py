import functions
import random
functions.clean()

num_Nomes = int(input("Insira o número de nomes aleatórios que deseja gerar: "))

lista_nomes = ["António", "Fábio", "Ricardo", "Francisco", "Ana", "Emanuel", "Daniel", "Fábio", ]

lista_apelidos = ["Emanuel", "Rodrigues", "Cruz", "Valente", "Caravalho", "António", " Sousa"]

print()

for i in range(0, num_Nomes):
  n = random.randint(0, len(lista_nomes)-1)
  a = random.randint(0, len(lista_apelidos)-1)
  print(f"{i+1}- {lista_nomes[n]} {lista_apelidos[a]}")


print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")