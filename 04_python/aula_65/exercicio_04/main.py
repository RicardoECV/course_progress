import functions

functions.clean()

t = 0.35
texto = "A analisar"

nome_1 = input("Insira o seu nome: ")
idade_1 = int(input("Insira a sua idade: "))
conhec_1 = input("Tem conhecimentos prévios de programação? ")

functions.analisar(t, texto)
print("{:=^28}".format(" Ficha de Candidatura ") + "\n")
print(f"Nome: ( {nome_1} )")
print(f"Idade: ( {idade_1} )")
print(f"Status da candidatura: ( {functions.aprov(idade_1, conhec_1)} )\n")
