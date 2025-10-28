# Importações
from funcoes import *

limpar()

n1 = float(input("- Digite a nota 1: "))
while(n1 < 0 or n1 > 10):
  print("\nNota inválida! Digite algo entre (0 e 10)\n")
  n1 = float(input("- Digite a nota 1: "))

n2 = float(input("- Digite a nota 2: "))
while(n2 < 0 or n2 > 10):
  print("\nNota inválida! Digite algo entre (0 e 10)\n")
  n2 = float(input("- Digite a nota 2: "))
  
media = (n1 + n2) / 2

print()

print(f"Média: ( {media:.1f} )")

print("\n\n\n")