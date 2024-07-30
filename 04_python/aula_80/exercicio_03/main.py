from functions import *
from Aluno import *

clean()

alunos = []

alunos.append(Aluno("Ricardo Valente", 45, 2444, "Corroios"))
alunos.append(Aluno("António Manuel", 24, 5434, "Almada"))
alunos.append(Aluno("Ana Cruz", 49, 2354, "Lisboa"))
alunos.append(Aluno("João Luz", 33, 2355, "Porto"))
alunos.append(Aluno("Fábio Carvalho", 24, 6564, "Faro"))

print("--- Lista Original ---\n")
for a in alunos: a.toString()

print("\n")

alunos[0].completarAnos()
alunos[1].completarAnos()
alunos[2].completarAnos()
print()

alunos[3].setMorada("Lisboa")
alunos[4].setMorada("Lisboa")
print()

print("--- Lista Modificada ---\n")
for a in alunos: a.toString()

print("\n" + "=" * 20 + "\n")



print("\n")