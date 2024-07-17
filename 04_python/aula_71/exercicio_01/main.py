import functions
import globais

functions.clean()

while(True):
  option = functions.menu()

  functions.clean()

  functions.loading(0.4, "AGUARDE", 3)
  
  if(option == 1):    
    functions.clean()
    functions.levantar() 

  elif(option == 2):    
    functions.clean() 
    functions.depositar()

  elif(option == 3):    
    functions.clean() 
    functions.pagamentos()

  elif(option == 4):    
    functions.clean()
    functions.exibitHistorico()
    functions.sleep(0.7)

    
  elif(option == 0):
    functions.loading(0.3, "A sair", 3)
    functions.clean()
    break
  else:    
    functions.clean()
    print("Opção inválida.")
  
  functions.sleep(0.7)

  functions.clean()   

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")