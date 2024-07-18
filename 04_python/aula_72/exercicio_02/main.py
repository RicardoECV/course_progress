import functions

functions.clean()

print("Lista Original\n")
frutas = ["uva", "maca", "morango"]
print(frutas)

frutas.append("ananas")
print()
print("Adiciona ananas.\n")
print(frutas)

frutas.insert(1, "laranja")
print()
print("Adiciona laranja na posição 2.\n")
print(frutas)

frutas.pop(0)
print()
print("Remova o primeiro elemento.\n")
print(frutas)

frutas.remove("morango")
print()
print("Remova o morango.\n")
print(frutas)


print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")