print("\n")

print("{:-^20}".format("Inicio") + "\n")

temperatura_1 = float(input("Digite uma temperatura em celsius: "))
estadoTemp = input("Kelvin ou Fahrenheit?(K/F): ")

def calcF(temperatura):	
	f = temperatura * 1.8 + 32
	return f

def calcK(temperatura):	
	k = temperatura + 273.15
	return k

print()

if (estadoTemp.lower() == "k"):
	print(f"Temperatura em celsius ({temperatura_1} c) é equivalente a ({calcK(temperatura_1):.2f} k)")

elif (estadoTemp.lower() == "f"):
	print(f"Temperatura em celsius ({temperatura_1} c) é equivalente a ({calcF(temperatura_1):.2f} f)")

else:
	print("Não digitou a opção pedida.")

print("\n" + "{:-^20}".format("Fim") + "\n")

print("\n")