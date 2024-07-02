print("\n")

nome_1 = input("Nome do aluno: ")
nota_1 = float(input("Nota 1: "))
nota_2 = float(input("Nota 2: "))
nota_t = float(input("Nota Trabalho: "))
nota_e = float(input("Nota Exame: "))
media = (nota_1 + nota_2 + nota_t)/3

print()

if (media>=9.5 and nota_e>=9.5):
  print(f"Parabéns {nome_1}! Passou com média: {media} e nota do exame: {nota_e}")
else:
  print(f"Infelizmente chumbou com média: {media:.1f} e nota do exame: {nota_e}")

print("\n")