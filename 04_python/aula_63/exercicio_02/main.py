import functions

functions.clean()

print("\n")
print("{:-^20}".format("Inicio") + "\n")

num_exec = 1

while (num_exec != 0):  

  num_exec = int(input("Escolha o número do exec(5 a 11) ou sair (0): "))
  print()

  if(num_exec == 5):
    num_1 = float(input("Escolha um número: "))
    print(f"O número anterior é: {functions.calcAnt(num_1):.0f}\n")
    print()

  elif(num_exec == 6):
    num_largura = int(input("Insira a largura: "))
    num_comp = int(input("Insira o comprimento: "))
    print(f"A área do rectangulo é: {functions.calcArea(num_largura, num_comp)}\n")
    print()

  elif(num_exec == 7):
    num_anos = int(input("Insira a idade em anos: "))
    num_meses = int(input("Insira a idade em meses: "))
    num_dias = int(input("Insira a idade em dias: "))
    print(f"A sua idade em dias é: {functions.calcIdade(num_anos, num_meses, num_dias)}")
    print()

  elif(num_exec == 8):
    num_eleitores = int(input("Insira o número total de eleitores: "))
    num_votosB = int(input("Insira o número de votos em Branco: "))
    num_votosN = int(input("Insira o número de votos em Nulos: "))
    num_votosV = int(input("Insira o número de votos em Validos: "))
    functions.calcEleitores(num_eleitores, num_votosB, num_votosN, num_votosV)
    print()

  elif(num_exec == 9):
    num_sal = int(input("Insira o salário base: "))
    num_ajuste = float(input("Insira o valor de ajuste (%) "))
    print(f"O seu salário final é {functions.calcSalario(num_sal, num_ajuste):.1f}\n")
    print()

  elif(num_exec == 10):
    num_carro = int(input("Insira o valor de fábrica do carro: "))
    print(f"O valor final do carro é: {functions.calcCusto(num_carro):.0f}\n")
    print()

  elif(num_exec == 11):
    num_carros = int(input("Insira o número de carros vendidos: "))
    num_total = int(input("Insira o valor total das suas vendas: "))
    num_salario = int(input("Insira o valor do seu salário: "))
    num_venda = int(input("Insira o valor que recebe por venda: "))
    print(f"O seu salário final é: {functions.calcVenda(num_carros, num_total, num_salario, num_venda):.1f}")
    print()

  else:
    print("Opção Inválida.")

print("\n" + "{:-^20}".format("Fim") + "\n")

print("\n")