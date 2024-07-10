import functions

functions.clean()

print("\n" + "{:-^20}".format("Inicio") + "\n")

num_1 = int(input("Digite um número: "))
i = 1

print("\nExec Principal\n")

while(i <= num_1):
  print(i)
  i += 1

print("\nDesafio\n")

i = 1
while(i <= num_1):
  print(num_1)
  num_1 -= 1




print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")