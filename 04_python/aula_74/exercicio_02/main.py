import functions
import globais

functions.clean()

while(True): 
  
  functions.clean()
  opcao = functions.mostrarMenu()
  functions.loading(globais.t, "Aguarde", 3)
  functions.clean()  
  
  if(opcao == 1): functions.registarAluno()
  elif(opcao == 2): functions.editarAluno()
  elif(opcao == 3): functions.apagarAluno()
  elif(opcao == 4): 
    print("--- Lista de Pessoas ---")
    functions.listarAlunos()
  elif(opcao == 0):
    functions.loading(globais.t, "A Sair", 3)
    break
  else: print("--- Opção Inválido ---")
  functions.press_enter()
  functions.clean()

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")