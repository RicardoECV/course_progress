import functions

functions.clean()

frase = input("Insira uma frase: ")

print("\nFor String\n")
for letra in frase:
  print(letra)

print("\nFor Com Range (Fim)\n")
for x in range(10):
  print(x)

print("\nFor Com Range (Inicio, Fim)\n")
for x in range(-5,6):
  print(x)

print("\nFor Com Range (Inicio, fim, salto)\n")
for x in range(0,11,2):
  print(x)

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")