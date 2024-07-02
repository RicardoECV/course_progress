import math
import random

print("\n")
num_int = int(input("Introduza um número: "))
num_float = float(input("Introduza outro número: "))

print(" --- INTERIOS --- ")
print("Original: ", num_int)
print("Modulo: ", abs(num_int))

print("Numero aleatório: ", random.randint(1,5))
print()

print(" --- FLOAT --- ")
print("Float original: ", num_float)
print()

print("Arredondar: ", round(num_float))
print("Arredondar(1 casa): ", round((num_float),1))
print("Arredondar(2 casas): ", round((num_float),2))
print()

print("Ceil(Cima): ", math.ceil(num_float))
print("Floor(Baixo): ", math.floor(num_float))
print()

print(" --- TRIGNOMETRIA --- ")
print("Seno",math.sin(num_int))
print("Cos", math.cos(num_int))
print("Tan", math.tan(num_int))


print("\n")