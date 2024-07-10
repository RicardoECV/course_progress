import functions

functions.clean()
t = 0.35

functions.menoInicial()

op_1 = input("Opção: ")

if(op_1.lower() == "t"):
  functions.analisar(t)
  base = float(input("Insira a base do triângulo: "))
  altura = float(input("Insira a altura do triângulo: "))
  print(f"A área do triangulo é ({functions.calcTri(base, altura):.1f})")

elif(op_1.lower() == "r"):
  functions.analisar(t)
  comp = float(input("Insira o comprimento do rectangulo: "))
  largura = float(input("Insira a largura do rectângulo: "))
  print(f"A área do rectângulo é ({functions.calcRec(comp, largura):.1f})")

elif(op_1.lower() == "c"):
  functions.analisar(t)
  raio = float(input("Insira o raio do circulo: "))
  print(f"A área do circulo é ({functions.calcCirc(raio):.1f})")

else:
  print("Opção Inválida")

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")