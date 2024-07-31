class Cliente:

  # Construtor
  def __init__(self, nome, genero, cartao, pin):
    self.nome = nome
    self.genero = genero
    self.cartao = cartao 
    self.pin = pin 
    self.saldo = 0 
    self.historico = []
   
  # Método
  def toString(self):    
    print(f"{self.genero} {self.nome}")
    print(f"Saldo: {self.saldo:.2f} €")
    print(f"Nº Cartão: {self.cartao}")
    print(f"Nº Pin: {self.pin}\n")

