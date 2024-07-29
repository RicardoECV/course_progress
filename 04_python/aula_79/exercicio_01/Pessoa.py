class Pessoa:

  def __init__(self, nome, idade, morada):

    self.nome = nome
    self.idade = idade
    self.morada = morada

  def toString(self):
    print(f"- Nome:{self.nome} - Idade: {self.idade} - Morada: {self.morada}")
