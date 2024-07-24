import functions

functions.clean()

pessoas = []

total = int(input("Quantas pessoas quer registar: "))

print()

for i in range(total):
  nome_digitado = input(f"- Introduza o nome da {i+1}º pessoa: ")
  morada_digitado = input(f"- Introduza a morada da {i+1}º pessoa: ")
  idade_digitado = int(input(f"- Introduza a idade da {i+1}º pessoa: "))
  nova_pessoa = [nome_digitado, morada_digitado, idade_digitado]
  pessoas.append(nova_pessoa)
  print()

for i in range(len(pessoas)):
  print(f"{i+1} - Nome: {pessoas[i][0]} |  Morada: {pessoas[i][1]} |  Idade: {pessoas[i][2]}")
  
print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")