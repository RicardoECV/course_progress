import functions

functions.clean()

print("\n" + "{:=^30}".format(" Par e Impar ") + "\n")

num_analisados = int(input("Insira o total de números que serão analisados: "))
loop = 1
par = 0
impar = 0

while(loop <= num_analisados):  
  num_1 = int(input(f"- Insira o {loop}º número: "))  
  loop += 1
  if((num_1 % 2) == 0):
    par += 1 

impar = num_analisados - par

print(f"\nNúmeros PARES: ({par})")
print(f"Números IMPARES: ({impar})")

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")