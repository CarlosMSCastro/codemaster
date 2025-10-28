from funcoes import*

limpar()
print("========= Parte 1 =========\n")
frutas = ["uva","maçã","morango"]
print(f"Lista original :{frutas}\n")
print("- Adicionar 'ananás'\n")
frutas.append("ananás")
print(f"Lista modificada:{frutas}\n")
print("- Inserir 'laranja' na segunda posição'\n")
frutas.insert(1,"laranja")
print(f"Lista modificada:{frutas}\n")
print("- Remover o primeiro elemento\n")
frutas.pop(0)
print(f"Lista modificada:{frutas}\n")
print("- Remover o 'morango'\n")
frutas.remove("morango")
print(f"Lista modificada final:{frutas}\n\n\n\n")

print("========= Parte 2 =========\n")
items = ["caneta","papel","caderno","lápis","x-ato","bolsa","cadeira"]
print(f"Lista original :{items}\n")
print("- Remover do 2º até ao 5º elemento")
del items[1:5]
print(items)




print("\n\n\n")

