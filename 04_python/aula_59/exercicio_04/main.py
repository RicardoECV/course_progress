print()

nome_1 = input("Insira o nome. ")
peso_1 = float(input("Insira o peso: "))
altura_1 = float(input("Insira a altura: "))

imc = peso_1 / (altura_1**2)

print()
print(f"Nome do paciente: {nome_1}.")
print(f"Peso do paciente: {peso_1}.")
print(f"Altura do paciente: {altura_1}.")
print(f"O paciente ({nome_1}) tem um IMC de ({imc:.1f}).")

print()