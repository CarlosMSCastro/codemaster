from funcoes import*

limpar()

print("===== Gerador de numeros inteiros =====\n")
primeiro = int(input("- Qual o numero inicial da lista ?    "))
ultimo = int(input("- Qual o numero final da lista ?    "))
print()
if (primeiro < ultimo):
  for i in range(primeiro,ultimo+1):print(i)
else:
    for i in range(primeiro,ultimo-1,-1):print(i)
print("\n\n")
