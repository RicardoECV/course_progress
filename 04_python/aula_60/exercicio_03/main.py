print("\n")

print("{:-^20}".format("Inicio") + "\n")

estado_1 = input("Lampda está queimada? ")
estado_2 = input("O interruptor está desligado? ")

if (estado_1.lower() == "sim"):
	if (estado_2.lower() == "sim"):
		print("Substituir a lampada.")
	else:
		print("Desligue o interruptor primeiro!")
else:
	print("Então o problema não está na lampada!")

print("\n")