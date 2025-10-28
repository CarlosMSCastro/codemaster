from funcoes import *

limpar()

print("=== Maior e menor numero ===")

quantidade = int(input("Quantos números serão analisados? "))

primeiro = int(input("Digite o 1º número a ser analisado: "))
maior = primeiro
menor = primeiro
loop = 2

while loop <= quantidade:
    numero = int(input(f"Digite o {loop}º número a ser analisado: "))
    if numero > maior:
        maior = numero
    if numero < menor:
        menor = numero
    loop += 1

print(f"\nO maior número digitado foi: {maior}")
print(f"O menor número digitado foi: {menor}")

print("\n\n\n")