import functions

functions.clean()

print("\n")
print("{:-^20}".format("Inicio") + "\n")

num_exec = 1

while (num_exec != 0):

  num_exec = int(input("Escolha o número do exec(13 a 21) ou sair (0): "))
  print()

  if(num_exec == 13):
    nota_1 = float(input("Insira a primera nota: "))
    nota_2 = float(input("Insira a segunda nota: "))
    nota_3 = float(input("Insira a terceira nota: "))
    print(f"A média final é: {functions.calcMedia(nota_1, nota_2, nota_3):.1f}\n")
    print()

  elif(num_exec == 14):
    num_1 = int(input("Insira um número: "))
    functions.calcNum(num_1)
    print()

  elif(num_exec == 15):
    num_2 = int(input("Insira um número: "))
    functions.calcPos(num_2)
    print()

  elif(num_exec == 16):
    num_macas = int(input("Insira o número de maçãs: "))
    print(f"O custo das maçãs é: {functions.calcMaca(num_macas):.1f} $")
    print()

  elif(num_exec == 17):
    nota_1 = float(input("Insira a primeira nota: "))
    nota_2 = float(input("Insira a segunda nota: "))
    functions.calcAprov(nota_1, nota_2)
    print()

  elif(num_exec == 18):    
    num_ano = int(input("Insira ano actual: "))
    num_nasc = int(input("Insira o seu ano de nascimento: "))
    functions.calcVotar(num_ano, num_nasc)
    print()

  elif(num_exec == 19):
    num_3 = int(input("Insira um número: "))
    num_4 = int(input("Insira outro número: "))
    functions.calcMaior(num_3, num_4)
    print()

  elif(num_exec == 20):
    num_5 = int(input("Insira um número: "))
    num_6 = int(input("Insira outro número: "))
    functions.calcContagem(num_5, num_6)
    print()

  elif(num_exec == 21):
    hora_i = int(input("Insira a hora de inicio em horas: "))
    hora_f = int(input("Insira a hora de fim em horas: "))
    print(f"O numero de horas que decorreu o jogo foram: {functions.calcDuracao(hora_i, hora_f)}")
    print()
    
  else:
    print("Opção Inválida.")

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")