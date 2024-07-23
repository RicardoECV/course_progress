import functions

functions.clean()

matriz = [
  ["Ricardo", "Valente", "Sesimbra", 29],
  ["Antonio", "Carvalho", "Lisboa", 35],
  ["Joao", "Cruz", "Almada", 43],
  ["Raquel", "Almeida", "Faro", 34]
]

print("=== Matriz Original ===\n")
print(matriz)

print("\n\n=== Listagem de Pessoas da matriz ===\n")

for p in matriz:
  print(f"Nome: ({p[0]}) | Apelido: ({p[1]}) | Morada: ({p[2]}) | Idade: ({p[3]})\n")

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")