from funcoes import*

limpar()

num = int(input("- Digite o numero limite inteiro positivo: "))
print("\n=== Exercicio Principal ===\n")
loop=1
while(loop <= num):
  print(loop)
  loop += 1
print("\n=== Desafio ===\n")
loop = num
while loop >= 1:
    print(loop)
    loop -= 1
print("\n\n\n")

