from funcoes import*

limpar()

valor = int(input("- Quantos nomes vai querer ordenar? "))
nomes = []
print()
for i in range(valor):
  nome = input(f"Nome do {i+1}º aluno: ")
  nomes.append(nome)

print("\n")
print("=== Lista de nomes ordenada ===\n")
numero = 1
nomes.sort()
for nome in nomes:
    print(f"{numero} - {nome}")
    numero +=1

print("\n\n")