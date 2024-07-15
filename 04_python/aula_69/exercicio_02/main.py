import functions

functions.clean()

num_ele = int(input("Insira o número de elementos da lista: "))
print()
for i in range(num_ele):
  print(i)

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")