import functions

functions.clean()

loop = 1
resp_1 =""
resp_2 =""

print("=== Break no While ===\n")

while(resp_1.lower() != "sim"):  
  resp_1 = input(f"Você deseja encerrar o loop WHILE ({loop}/5)? ")   
  if(loop >= 5):
    break
  loop += 1

print()
if(loop >= 5 and resp_1.lower() != "sim"):
  print("Você ultrapassou o número de tentativas.")
else:
  print("Você não ultrapassou o número de tentativas.")

print()
print("=== Break no For ===\n")

for i in range(5):
  if(resp_2.lower() == "sim"): 
    break
  resp_2 = input(f"Você deseja encerrar o loop FOR ({i+1}/5)? ")  

print()
if(i >= 4 and resp_2.lower() != "sim"):
  print("Você ultrapassou o número de tentativas.")
else:
  print("Você não ultrapassou o número de tentativas.")

print("\n" + "{:-^20}".format("Fim") + "\n")
print("\n")