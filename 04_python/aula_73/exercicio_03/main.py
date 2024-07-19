import functions

functions.clean()

print("--- Ordenador de Alunos ---\n")
num_A = int(input("Insira o número de alunos que quer organizar: "))
print()

lista_1 = functions.listaAlunos(num_A)
lista_1.sort()

functions.loading(0.3, "Aguarde")

print("--- Lista de Alunos Ordenada --- \n")
for i in range(len(lista_1)): 
  print(f"{i+1} - {lista_1[i]}.")

  
print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")