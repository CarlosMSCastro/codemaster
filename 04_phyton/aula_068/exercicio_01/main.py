from funcoes import*

limpar()

print("===== Cálculo de Áreas com Funções =====\n")
print("--- Escolha uma opção ---\n")
print("(t) para triangulos📐")
print("(r) para rectângulos🟥")
print("(c) para círculo🔴\n")
opcao = input("Opção : ").lower()

if (opcao=="r"):rect()
elif(opcao=="t"):tria()
elif(opcao=="c"):circ()
else:
  limpar()
  print("===== Cálculo de Áreas com Funções =====\n")
  print("--- OPÇÃO INVÁLIDA ---")

print("\n\n\n")

