from funcoes import*

limpar()

num = int(input("Qual a tabuada que pretende consultar ? "))
print(f"\n=== TABUADA DO {num} ===\n")
mult=0
while(mult <= 10):
  resultado = num * mult
  print(f"{num} x {mult} = {resultado}")
  mult += 1

print("\n\n\n")