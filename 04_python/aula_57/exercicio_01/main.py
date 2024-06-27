print("\n")

nome_string = "Ricardo Valente"
numero_int = 2
numero_float = 3.634
boolean_condicion = False
x = 0

def contagem(x):
    while x >= 0: 
        if 0 == x % 2:
            print(x)   
            x = x-1
        else:
            x = x-1


# contagem(10)
print("String: " + nome_string)
print("Int: " + str(numero_int))
print("Float:", numero_float)
print("BOOLEAN", boolean_condicion, sep=": ")

print("\n")