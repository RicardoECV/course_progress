import functions

functions.clean()

print("\n" + "{:-^20}".format("Inicio") + "\n")

estado_1 = input("Deseja tirar a carta de condução? ")
num = 1
estado_2 = "nao"

if(estado_1.lower() == "sim"):
  
  while(estado_2.lower() != "sim"):
    estado_2 = input("Você passou no teste? ") 
    if(estado_2.lower() == "sim"):
      break
    print(f"Tem de estudar mais. ({num}) \n")   
    num += 1

  print(f"\nParabéns Tirou a carta á {num}.")

else:
  print ("Utilizar transportes publicos.")
  


print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")