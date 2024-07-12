import functions

functions.clean()

print("\n" + "{:=^30}".format(" Escola Codemaster ") + "\n")

total_alu = int(input("- Insira o total de alunos: "))
idade_t = 0
loop = 1

print()

while(loop <= total_alu):  
  idade_1 = int(input(f"- Insira a idade do {loop}º aluno: "))
  idade_t += idade_1  
  loop += 1  

media = idade_t / total_alu

print(f"\nA média de idades dos alunos é : ({media:.1f} anos)")

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")