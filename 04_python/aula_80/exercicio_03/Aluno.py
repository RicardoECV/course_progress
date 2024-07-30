class Aluno:

  # Construtor
  def __init__(self, nome, idade, nif, morada):
    self.nome = nome
    self.idade = idade
    self.nif = nif
    self.morada = morada
 
   
  # Método
  def toString(self):
    print(f"{self.nome:<20}  ->(Idade: {self.idade}) (Morada: {self.morada:>10}) (NIF: {self.nif})")

  def completarAnos(self):
    self.idade += 1
    print(f"{self.nome} fez anos!")

  def setMorada(self, nova_morada): 
    print(f"{self.nome} mudou-se do(a) ({self.morada}) para ({nova_morada})")
    self.morada = nova_morada

