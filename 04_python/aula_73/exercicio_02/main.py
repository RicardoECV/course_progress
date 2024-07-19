import functions

functions.clean()

lista_1 = ["mesa", "bola", "x-acto", "caneca", "ananas", "uva", "morango"]

print("--- Lista Original ---\n")

for f in lista_1: print(f)

print("\n--- Lista Com Númeração ---\n")

for i in range(len(lista_1)): print(f"{i+1} - {lista_1[i]}")

print("\n--- Lista Reverse ---\n")

for f in reversed(lista_1): print(f)

print("\n--- Lista Reverse com Númeração ---\n")

for i in range(len(lista_1)-1, -1, -1): print(f"{i+1} - {lista_1[i]}")

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")