from functions import *
from Aluno import *
import random

clean()

alunos = []

alunos.append(Aluno("Ricardo Valente", 45, "2º C", "Corroios"))
alunos.append(Aluno("António Manuel", 24, "2º A", "Almada"))
alunos.append(Aluno("Ana Cruz", 24, "1º C", "Lisboa"))
alunos.append(Aluno("João Luz", 33, "1º B", "Porto"))
alunos.append(Aluno("Fábio Carvalho", 24, "3º B", "Faro"))

for a in alunos: a.toString()


print("=" * 20 + "\n")

for i in range(len(alunos)): 
  a = alunos[i]
  a.toStringId(i)

print("\n")