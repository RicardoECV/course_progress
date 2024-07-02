import math
import random

print("\n")

nome = input("Nome: ")
apelido = input("Apelido: ")
idade = int(input("Idade: "))
morada = input("Morada: ")

print()
print("Sou o ", nome, " ", apelido, ", tenho ", idade, " anos, e moro na ", morada, ".", sep="")
print()
print(f"Sou o {nome} {apelido}, tenho {idade} anos, e moro na {morada}.")
print()
print("Sou o {} {}, tenho {} anos, e moro na {}.".format(nome, apelido, idade, morada))
print() 
print("Sou o {3} {1}, tenho {2} anos, e moro na {0}.".format(nome, apelido, idade, morada)) 


print("\n")