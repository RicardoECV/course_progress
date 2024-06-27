print("\n")

texto_1 = input("Insira texto 1: ")
caract = input("Insira a letra que procura: ")
total_c = len(texto_1)
total_c_spec = texto_1.count(caract)

print(texto_1)
print(texto_1.upper())
print(texto_1.lower())
print(texto_1.capitalize())
print(texto_1.title())

print(len(texto_1))
print("Numero de:", caract, " Existem:", total_c_spec)

print("\n")