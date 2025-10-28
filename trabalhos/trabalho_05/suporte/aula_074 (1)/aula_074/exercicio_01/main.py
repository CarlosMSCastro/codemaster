# Importações
from funcoes import *

limpar()

numero = int(input("- Digite um número inteiro entre (1 e 10): "))

print()

if(numero >= 1 and numero <= 10):
  print(f"--- Tabuado do ({numero}) ---\n")
  for i in range(1, 11):
    resultado = numero * i
    print(f"{numero} x {i:>2} = {resultado:>3}")

else: print("Digite apenas números entre (1 e 10).")

print("\n\n\n")