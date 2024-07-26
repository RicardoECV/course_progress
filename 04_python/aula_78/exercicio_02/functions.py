import os
import time
import globais


def mostrarMenu():
  loading(globais.t, "Aguarde", 3)
  clean()
  print("--- Loja Python ---\n")
  print("1 - Registar Produto.")
  print("2 - Editar Produto.")
  print("3 - Apagar Produto.")
  print("4 - Listar Produtos.\n")
  print("5 - Vender.")
  print("6 - Listar Vendas.\n")
  print("0 - Sair\n")
  return int(input("Opção: "))

def registarProduto(): 
  print("--- Registo de Produto ---\n")
  nome = input("Insira o nome do novo Produto: ")
  if (not jaExiste(nome)):
    preco = float(input("Insira o preço do novo Produto: "))
    stock = int(input("Insira a quantidade do novo Produto: "))  
    globais.produtos.append(novoProduto(nome, preco, stock))
    print("\n --- Sucesso ---\n")    
  else:
    print("\nProduto já existente\n")

def editarProduto():
  print("--- Editar Produto ---\n")
  mostrarProdutos(False)
  num_produto = int(input("Insira o número do Produto que deseja editar: ")) -1
  produto = globais.produtos[num_produto]
  if(num_produto >= 0 and num_produto < len(globais.produtos)):
    print("\nEdição do Produto\n")
    print("1 - Editar o nome.")
    print("2 - Editar o preço.")
    print("3 - Editar a quantidade.\n")  
    print("0 - Cancelar.\n")
    opcao = int(input("Opção: "))
    print()

    if(opcao == 1):
      produto["nome"] = input(f"Insira o novo nome do Produto ({produto['nome']}): ")

    elif(opcao == 2):
      produto["preco"] = float(input(f"Insira o novo preço do Produto ({produto['preco']:.2f}): "))
    
    elif(opcao == 3):
      produto["stock"] = int(input(f"Insira a nova quantidade do Produto ({produto['stock']}): "))
    elif(opcao == 0): print("Cancelado.")

  print()

def apagarProduto():
  print("--- Apagar Produto ---\n")
  mostrarProdutos(False)
  num_produto = int(input("Insira o número do Produto que deseja apagar: ")) -1
  produto = globais.produtos[num_produto]
  if(num_produto >= 0 and num_produto < len(globais.produtos)):
    resposta = input(f"\nDeseja apagar o Produto ({produto['nome']})? ")
    if(resposta.lower() == "sim"):
      globais.produtos.pop(num_produto)
      print("\n --- Sucesso ---\n")
    else: print("\n--- Operação Anulada ---")
  else: print("\n Número do Produto inválido") 

def vendaProduto():
  print("--- Vender Produto ---\n")
  mostrarProdutos(False)
  num_produto = int(input("Insira o número do Produto que deseja vender: ")) -1
  produto = globais.produtos[num_produto]
  if(num_produto >= 0 and num_produto <= len(globais.produtos)):
    num_vendas = int(input(f"\nInsira a quantidade que será vendida ({produto['nome']}): "))
    if(num_vendas <= produto["stock"]):
      globais.vendas.append(novaVenda(produto["nome"], produto["preco"], num_vendas))
      produto["stock"] -= num_vendas
      print(f"\nVenda #{len(globais.vendas)} - {produto['nome']} ({produto["preco"]:.2f} €) x ({num_vendas} uni.) = ({num_vendas * produto["preco"]:.2f} €)")
      print("\n--- Sucesso ---\n")
    else: print("\n--- Quantidade Inválida! ---\n")
  else: print("\n--- Número do produto Inválido ---\n")

def mostrarProdutos(menu):
  if(menu): print("--- Lista de Produtos ---\n")
  for i in range(len(globais.produtos)): toString(i, globais.produtos[i])
  print()

def mostrarVenda():
  print("--- Lista de Vendas ---\n")
  total = 0
  for i in range(len(globais.vendas)):
    total += (globais.vendas[i]["preco"] * globais.vendas[i]["stock"])
    toString(i, globais.vendas[i])
    
  print(f"\nValor total das vendas: ({total:.2f} €)\n")

# Funções auxiliares
def novoProduto(nome, preco, quantidade):
  novo_produto = {
    "nome": nome,
    "preco": preco,
    "stock": quantidade    
  }  
  return novo_produto 

def novaVenda(nome, preco, quantidade):
  nova_venda = {
    "nome": nome,
    "preco": preco,
    "stock": quantidade    
  }  
  return nova_venda

def jaExiste(nome):
  for p in globais.produtos:
    if(nome == p["nome"]): return True
  return False

def toString(i, produto):
  print(f"{i+1} - Nome: ({produto['nome']}) Preço: ({produto['preco']:.2f} €) Quantidade: ({produto['stock']})")

def init():
  globais.produtos.append(novoProduto("Papel A3", 13.43, 20))
  globais.produtos.append(novoProduto("Caneta Verde", 2.99, 14))
  globais.produtos.append(novoProduto("Cadeira 3 Pernas", 99.99, 3))


# Funções especiais
def clean():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def sleep(t): time.sleep(t)

def loading(t, frase, x):
  clean()
  print(frase, end="", flush=True)
  sleep(t)
  for loop in range(x):    
    print(".", end="", flush=True)
    sleep(t)  
     
def press_enter():
  input("Carregue ENTER: ")