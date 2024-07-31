class Usuario:

  # Construtor
  def __init__(self, nome, login, pw):
    self.nome = nome
    self.login = login
    self.pw = pw  
   
  # Método
  def toString(self):
    print(f"{self.nome} (Login: {self.login}) (Senha: {self.pw})")

