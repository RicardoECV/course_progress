print('\n')

x = 0
nome_string = "Ricardo"

def contagem(x):
    while x > 0: 
        if 0 == x % 2:
            print(x)   
            x = x-1
        else:
            x = x-1

contagem(20)
print("Nome:" + nome_string)


print('\n')

