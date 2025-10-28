

print("\n\n")
titulo=" Média Escolar "
print(f"{titulo:=^35}")
print()
nome = input("Qual o seu primeiro e ultimo nome ? ")
nota1 = float(input("Qual a nota obtida no primeiro exame ? "))
nota2 = float(input("Qual a nota obtida no segundo exame ? "))
nota3 = float(input("Qual a nota obtida no trabalho final ? "))
media = (nota1 + nota2 + nota3)/3
print()
print(f"O aluno {nome} obteve uma média final de ({media:.1f}).")
print("\n\n")