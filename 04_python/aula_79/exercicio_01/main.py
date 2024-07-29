from Pessoa import *
from functions import *


clean()

p1 = Pessoa("Ricardo", 32, "Sesimbra")
p2 = Pessoa("Filipa", 34, "Lisboa")
p3 = Pessoa("Ana", 35, "Porto")

print(p1. idade)

print(p2.morada)

p1.idade += 1

print(f"- Nome:{p1.nome} - Idade: {p1.idade} - Morada: {p1.morada}")
print(f"- Nome:{p2.nome} - Idade: {p2.idade} - Morada: {p2.morada}")
print(f"- Nome:{p3.nome} - Idade: {p3.idade} - Morada: {p3.morada}")


print("\n")