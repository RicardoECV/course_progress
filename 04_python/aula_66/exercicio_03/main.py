import functions

functions.clean()

print("\n" + "{:-^20}".format("Inicio") + "\n")

estado_1 = input("Deseja tirar a carta de condução? ")
estado_2 = ""
num = 1

if(estado_1.lower() == "sim"):
  
  while(estado_2.lower() != "sim"):
    print(f"Tem de estudar mais para o ({num}º) teste. \n")
    estado_2 = input(f"Você passou no ({num}º) teste? ")     
    num += 1
                 
    
  print(f"\nParabéns foste aprovado no ({num-1}º) teste.")

else:
  print ("Utilizar transportes publicos.")
  
print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")