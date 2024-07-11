import functions

functions.clean()

print("\n" + "{:-^20}".format("Inicio") + "\n")

num_1 = int(input("- Insira um número: "))
num_2 = int(input("\n- Insira um número limite: "))

print(f"\nMultiplos de ({num_1}) entre 0 e ({num_2})\n")
functions.calcMul(num_1, num_2)

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")