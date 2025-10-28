from funcoes import*

limpar()

print("=== Contabilizador de numeros ===\n")
quantidade = int(input("Quantos numeros serão analizados ? "))
par=0
impar=0
loop = 1
while (loop <= quantidade):
    numero = int(input(f"Digite o {loop}º numero a ser analizado: "))
    if (numero % 2 == 0):
        par +=1
    else:
        impar +=1
    loop += 1
print(f"\nQuantidade de numeros pares {par}.")
print(f"\nQuantidade de numeros impar {impar}.")
print("\n\n\n")