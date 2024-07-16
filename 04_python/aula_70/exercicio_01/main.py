import functions

functions.clean()

num_inic = int(input("Insira o valor inicial da lista: "))
num_fim = int(input("Insira o valor final da lista: "))
num_v = int(input("Insira o número de vezes: "))
print("-"*25)

for j in range(num_v):

  if (num_inic > num_fim):
    for i in range(num_inic, num_fim-1, -1):
      print(i)

  else:
    for i in range(num_inic, num_fim+1):
      print(i)
      
  print("-"*25)
  
  


print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")