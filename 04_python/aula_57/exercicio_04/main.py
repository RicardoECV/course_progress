print("\n")

texto_1 = input("Insira texto 1: ")
caract = input("Insira a letra que procura: ")
subs = input("Selecione o que quer substituir: ")
subs_por = input("Substituir por: ")
total_c = len(texto_1)
total_c_spec = texto_1.count(caract)

print("\n")
print("Original: (", texto_1, ")", sep="")
print("\n")
print("Upper: (", texto_1.upper(), ")", sep="")
print("Lower: (", texto_1.lower(), ")", sep="")
print("Capitalize: (", texto_1.capitalize(), ")", sep="")
print("Title: (", texto_1.title(), ")", sep="")
print("\n")
print("Existem: (", len(texto_1), ") caracteres no total.", sep="")

if total_c_spec == 0:
    print("Não existem caracteres selecionados!")
else:    
    if total_c_spec > 1:
        print("Existem: (", total_c_spec, ") do caracteres (", caract, ")", sep="")
    else:
        print("Existe: (", total_c_spec, ") do caractere (", caract, ")", sep="")

print("Substituido: (", subs, ") por: (", subs_por, "). Texto alterado: (", texto_1.replace(subs,subs_por), ")", sep="")

print("\n")