import functions

functions.clean()

while(True):
  option = functions.menu()

  functions.clean()
  functions.loading(0.4, "AGUARDE", 3)
  functions.clean()

  if(option == 1):  
    functions.vendas() 

  elif(option == 2):
    functions.exibitHistorico() 
    
  elif(option == 0):
    functions.loading(0.3, "A sair", 3)    
    break
  else: 
    print("Opção inválida.")

  functions.clean()

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")