from Aluno import *
from functions import *
import random


clean()

a1 = Aluno("Ricardo Valente", 45, "2º C", "Corroios")
a2 = Aluno("Maria Antónia", 41, "1º B", "Almada")
a3 = Aluno("Ana Luisa", 34, "2º A", "Lisboa")

a1.toString()
a1.completarAnos()
a1.toString()

print("="*20)

a2.toString()
a2.alterarMorada("Lisboa")
a2.toString()

print("="*20)

a3.toString()
a3.atribuirNotas(17,19)
a3.toString()

print("="*20)

print(f"Média do aluno 3: {a3.getMedia():.1f}")

for a in alunos:
  n1 = random.randint(0, 20)
  n2 = random.randint(0, 20)
  a.atribuirNotas(n1, n2)

for a in alunos: a.toString()

print("\n")