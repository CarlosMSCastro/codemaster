from funcoes import*

limpar()

print("===== Calculador de Nota =====")
continuar = "s"
while continuar == "s":
    n1 = float(input("\n\n- Qual a nota da 1º Avaliação ?    "))

    while n1 < 0 or n1 > 10:
        print("Nota inválida!\n")
        n1 = float(input("\n\n- Qual a nota da 1º Avaliação ?    "))

    n2 = float(input("- Qual a nota da 2º Avaliação ?    "))
    while n2 < 0 or n2 > 10:
        print("Nota inválida!\n")
        n2 = float(input("- Qual a nota da 2º Avaliação ?    "))

    media = (n1+n2)/2
    print(f"A média do seguinte aluno é de {media}")
    continuar = input("Deseja voltar a calcular? (s/n): ").lower()

print("\n\n")
