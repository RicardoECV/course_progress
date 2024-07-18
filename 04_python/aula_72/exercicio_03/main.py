import functions

functions.clean()

frutas = ["uva", "maca", "laranja", "melancia", "banana", "ananas"]

print(f"Lista Original = {frutas}\n")

print(f"Primeiro elemento - ({frutas [0]})\n")

print(f"Ultimo elemtno com indice negativo - ({frutas [-1]})\n")

print(f"Ultimo elemtno com indice positivo - ({frutas [5]})\n")

print(f"Sublista do 2º ao 4º elemento = {frutas[1:4]}\n")

frutas[1] = "clementina"
print(f"Substituir o 2º elemento por 'clementina' = {frutas}\n")

  
print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")