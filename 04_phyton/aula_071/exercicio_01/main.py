from funcoes import*

limpar()

print("=== Média dos Alunos ===\n")
nota1 = float(input("Insira a nota que do teste 1:  "))
aguarde(0.7)
nota2 = float(input("Insira a nota que do teste 2:  "))
aguarde(0.7)
nota3 = float(input("Insira a nota que do teste 3:  "))
aguarde(0.5)
limpar()
animar("Calculando")
aguarde(1)
print()
limpar()
print("\n=== Média dos Alunos ===\n")
calculo(nota1,nota2,nota3)


print("\n\n\n")