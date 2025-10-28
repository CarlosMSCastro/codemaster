from funcoes import*

limpar()

print("=== Maior e Menor ===\n")
total = int(input("Quantos numeros serão analizados ? "))
print()

maior = 0
loop = 1
while(loop<=total):
  numerodigitado=int(input(f"Digite o {loop}º numero: "))
  if(loop==1):
    maior=numerodigitado
    menor=numerodigitado
  else:
    if(numerodigitado >maior): maior=numerodigitado
    elif(numerodigitado <menor): menor=numerodigitado
  loop+=1

print(f"\nO maior número digitado foi: {maior}")
print(f"O menor número digitado foi: {menor}")
print("\n\n\n")