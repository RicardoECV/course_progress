import functions
import globais

functions.clean()


while(True):
 
  functions.clean()
  opcao = functions.mostrarMenu()
  functions.loading(globais.t, "Aguarde", 3) 
  functions.clean()

  if(opcao == 1): functions.novoColaborador()
  elif(opcao == 2): functions.editarColaborador()
  elif(opcao == 3): functions.apagarColaborador()
  elif(opcao == 4): functions.exibirColaboradores(True)
  elif(opcao == 0):
    functions.loading(globais.t, "A Sair", 3)
    break
  else: print("--- Opção Inválido ---")
  functions.press_enter()
  

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")