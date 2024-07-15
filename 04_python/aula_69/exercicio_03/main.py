import functions

functions.clean()

num_inic = int(input("Insira o valor inicial: "))
num_fim = int(input("Insira o valor final: "))

if (num_inic > num_fim):
  for i in range(num_inic, num_fim-1, -1):
    print(i)
  
print()
for i in range(num_inic, num_fim+1):
  print(i)
  
print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")