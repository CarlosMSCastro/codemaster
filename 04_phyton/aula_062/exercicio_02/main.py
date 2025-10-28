import random                     
import math

int = -10
float = 3.567
random1 = random.randint(1, 5)

print("\n\n")
print("---Funções dos inteiros---")
print()
print("Inteiro 'original': ("+ str(int)+")")
print("Inteiro 'valor absoluto': ("+ str(abs(int))+")")
print()
print("Numero inteiro aleatório 'entre 1 e 5': ("+ str(random1) +")")
print("\n")
print("---Funções dos Floats---")
print()
print("Float 'original': ("+ str(float)+")")
print()
print("Float 'arredondado': ("+ str(round(float))+")")
print("Float 'arredondado para 1 casa decimal': ("+ str(round(float, 1))+")")
print("Float 'arredondado para 2 casa decimais': ("+ str(round(float, 2))+")")
print()
print("Float 'arredondado para cima': ("+ str(math.ceil(float))+")")
print("Float 'arredondado para baixo': ("+ str(math.floor(float))+")")
print("\n\n")