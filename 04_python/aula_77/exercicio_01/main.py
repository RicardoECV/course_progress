import functions

functions.clean()

p1 = {    
  "id": "id-3",
  "class": "header",
  "container": "fluid",
  "margin": 12,
  "padding": -5,    
}

print("--- Dicionário Original ---\n")
print(p1)

print("\n\n--- Dicionário com For ---\n")
for chave in p1:
  print(f"{chave} - {p1[chave]}")

print("\n\n--- Dicionário com chaves ---\n")
print(p1.keys())

print("\n\n--- Dicionário com valores ---\n")
print(p1.values())

print("\n")