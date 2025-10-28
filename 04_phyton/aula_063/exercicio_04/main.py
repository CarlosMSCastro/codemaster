

print("\n\n")
titulo=" Clinica de Nutrição "
print(f"{titulo:=^35}")
print()
nome = input("Qual o nome do paciente ? ")
peso = float(input("Qual o seu peso em (kg) ? "))
altura = float(input("Qual a sua altura em (m) ? "))
imc = peso / altura ** 2
print()
print(f"O paciente {nome} está com um IMC de ({imc:.1f}).")
print("\n\n")