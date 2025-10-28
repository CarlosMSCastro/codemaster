from funcoes import*

limpar()

print("=== Contabilizador de números ===\n")
quantidade = int(input("Quantos numeros serão analizados ? "))
print()

loop =1
pares = 0
impares = 0
while(loop <= quantidade):
  numerodigitado=int(input(f"-Digite o ({loop}º) numero: "))
  if(numerodigitado %2 == 0): pares +=1
  else:impares+=1
  loop +=1
  
print(f"\nNumeros Impares : {impares}")
print(f"Numeros Pares : {pares}")

print("\n\n\n")