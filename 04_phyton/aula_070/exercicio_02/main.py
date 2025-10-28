from funcoes import*

limpar()

print("=== ESCOLA CODEMASTER ===\n")
numalunos = int(input("Quantos alunos tem a turma? "))
soma = 0
loop = 1

while (loop <= numalunos):
    idade = int(input(f"Digite a idade do {loop}º aluno: "))
    soma += idade
    loop += 1
media = soma / numalunos
print(f"\nA média de idades da turma é {media:.1f} anos.")


print("\n\n\n")