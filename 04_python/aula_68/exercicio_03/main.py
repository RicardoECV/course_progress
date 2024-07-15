import functions

functions.clean()

print("\n" + "{:=^30}".format(" Maior e Menor ") + "\n")

num_analisados = int(input("Insira o total de números que serão analisados: "))
num_maior = 0
num_menor = 0
loop = 1

print()
while(loop <= num_analisados):  
  num_1 = int(input(f"- Insira o ({loop}º) número: "))   
    
  if (loop == 1):
    num_menor = num_1
    num_maior = num_1  

  else:
    if (num_1 >= num_maior):
      num_maior = num_1
    if (num_1 <= num_menor):
      num_menor = num_1
  loop += 1

print(f"\nNúmero MAIOR: ({num_maior})")
print(f"Número MENOR: ({num_menor})")
  
print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")