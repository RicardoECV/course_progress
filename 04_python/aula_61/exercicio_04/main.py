print("\n")

print("{:-^20}".format("Inicio") + "\n")

estado_1 = input("Está a chover? ")

if (estado_1.lower() == "sim"):
	estado_2 = input("Voce quer sair de casa? ")
	if (estado_2.lower() == "sim"):
		print("Ir ao cinema.")
	else:
		print("Pedir glovo.")
else:
	print("Ir ao parque.")

       
print("\n" + "{:-^20}".format("Fim") + "\n")

print("\n")