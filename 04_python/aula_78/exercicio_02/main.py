import functions
import globais

functions.clean()
functions.init()

while(True):
  
  functions.clean()
  opcao = functions.mostrarMenu()  
  functions.clean()

  if(opcao == 1): functions.registarProduto()
  elif(opcao == 2): functions.editarProduto()
  elif(opcao == 3): functions.apagarProduto()
  elif(opcao == 4): functions.mostrarProdutos(True)
  elif(opcao == 5): functions.vendaProduto()
  elif(opcao == 6): functions.mostrarVenda()
  elif(opcao == 0):
    functions.loading(globais.t, "A Sair", 3)
    break
  else: print("--- Opção Inválido ---")
  functions.press_enter()
  

print("\n")