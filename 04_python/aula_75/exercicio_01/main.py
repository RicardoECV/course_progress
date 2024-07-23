import functions

functions.clean()

matriz = [
  ["Ricardo", "Valente", "Sesimbra"],
  ["Antonio", "Carvalho", "Lisboa"],
  ["Joao", "Cruz", "Almada"]
]

print("=== Matriz Original ===\n")
print(matriz)

print("\n\n=== Matriz Com For ===\n")

for n in matriz:
  print(n)

print("\n\n=== Matriz Com Dois For ===\n")

for linha in matriz:
  for coluna in linha:
    print(coluna)
  print()  

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")