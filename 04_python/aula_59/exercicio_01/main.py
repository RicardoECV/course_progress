print()

nome_1 = input("Digite o seu nome: ")
nota_1 = float(input("Nota 1: "))
nota_2 = float(input("Nota 2: "))
nota_trabalho = float(input("Nota do Trabalho: "))

media = round((nota_1 + nota_2 + nota_trabalho)/3, 1)

print(f"{nome_1} teve as seguintes notas: {nota_1}, {nota_2}, {nota_trabalho} e acabou com a média {media}")

print()