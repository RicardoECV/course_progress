print("\n")

print("{:-^20}".format("Inicio") + "\n")

temp_1 = float(input("Qual a temperatura exterior? "))
print()

if (temp_1 <= 18):
  print("Levar roupas quentes.")
elif (temp_1 > 28):
  print("Usar fato de banho!")
else:
  print("Usar roupas normais.")

print()
estado_1 = input("Está a chover? ")
print()

if (estado_1.lower() == "sim"):
  print("Levar chapeu.")

print("\n" + "{:=^20}".format("Ir Passear") + "\n")

print("\n")