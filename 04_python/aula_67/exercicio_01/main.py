import functions

functions.clean()

num_1 = int(input("Digite um número da tabuada: "))
t=0.2

print(f"\nTabuada do ( {num_1} )\n")
functions.calcTab(num_1, t)

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")