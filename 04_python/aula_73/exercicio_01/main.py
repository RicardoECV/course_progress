import functions

functions.clean()

lista_1 = ["mesa", "bola", "x-acto", "caneca", "ananas", "uva", "morango"] 
lista_2 = ["banana", "melancia", "maça", "pera"]

print(f"Lista Original - {lista_1}\n")

lista_1.sort()
print(f"Lista Ordenada - {lista_1}\n")

lista_1.sort(reverse=True)
print(f"Lista Ordenanda Inversa - {lista_1}\n")

if("morango" in lista_1): print("'Morango' está na lista 1\n")
else: print("'Morango' não está na lista 1\n")

lista_1.extend(lista_2)
print(f"Lista 1 Extendida - {lista_1}\n")

lista_1.clear()
print(f"Lista 1 Limpa - {lista_1}")

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")