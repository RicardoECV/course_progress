import functions

functions.clean()

print("\n")

print("{:-^20}".format("Inicio") + "\n")

temperatura_1 = float(input("Digite uma temperatura em celsius: "))
estadoTemp = input("Kelvin ou Fahrenheit?(K/F): ")

print()

if (estadoTemp.lower() == "k"):
	print(f"Temperatura em celsius ({temperatura_1} c) é equivalente a ({functions.calcK(temperatura_1):.2f} k)")

elif (estadoTemp.lower() == "f"):
	print(f"Temperatura em celsius ({temperatura_1} c) é equivalente a ({functions.calcF(temperatura_1):.2f} f)")

else:
	print("Não digitou a opção pedida.")

print("\n" + "{:-^20}".format("Fim") + "\n")

print("\n")