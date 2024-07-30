class Aluno:

  # Construtor
  def __init__(self, nome, idade, turma, morada):
    self.nome = nome
    self.idade = idade
    self.turma = turma
    self.morada = morada
    self.nota_1 = 0
    self.nota_2 = 0
   
  # Método
  def toString(self):
    print("--- Ficha do Aluno  ---")
    print(f"Nome: {self.nome}")
    print(f"Idade: {self.idade}")
    print(f"Turma: {self.turma}")
    print(f"Morada: {self.morada}")
    print(f"Nota 1: {self.nota_1}")
    print(f"Nota 2: {self.nota_2}\n")
    print(f"Média: {self.getMedia():.1f}\n")

  def toStringId(self, id):
    print(f"--- Ficha do Aluno {id+1} ---")
    print(f"Nome: {self.nome}")
    print(f"Idade: {self.idade}")
    print(f"Turma: {self.turma}")
    print(f"Morada: {self.morada}")
    print(f"Nota 1: {self.nota_1}")
    print(f"Nota 2: {self.nota_2}\n")
    print(f"Média: {self.getMedia():.1f}\n")

  def completarAnos(self):
    self.idade += 1

  def alterarMorada(self, nova_morada):
    self.morada = nova_morada

  def atribuirNotas(self, nota_1, nota_2):
    self.nota_1 = nota_1
    self.nota_2 = nota_2

  def getMedia(self):
    return ((self.nota_1 + self.nota_2) / 2)
