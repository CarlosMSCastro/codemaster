from funcoes import*

limpar()

frutas = ["uva","maçã","morango","ananás","banana","laranja"]
diversos = ["bolo","pão","queijo"]

print(f"Lista original 1:{frutas}")
print(f"Lista original 2:{diversos}\n")

frutas.sort()
print(f"Lista 1 ordenada:{frutas}\n")

frutas.sort(reverse=True)
print(f"Lista 1 ordenada reversa:{frutas}\n")

if("morango" in frutas): print("'morango' está na lista 1\n")
else: print("'morango' não está na lista 1\n")

print("--------------\n")

frutas.extend(diversos)
print("Lista 1 extendida com a lista 2")
print(frutas)
print()

print("--------------\n")
frutas.clear()
print(f"Lista 1 limpa: {frutas}")
print("\n\n\n")

