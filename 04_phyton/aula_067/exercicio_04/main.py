from funcoes import*

limpar()

nome = input("- Digite o seu Nome: ")
aguarde(0.4)
idade = int(input("- Digite a sua idade: "))
aguarde(0.4)
status = input("- Tem conhecimentos prévios de programação? ")
aguarde(0.4)
limpar()

animar("Aguarde")
limpar()

print("=== Resultado da candidatura ===\n\n")
print(f"Nome: ({nome})")
print(f"Idade: ({idade})")
print(f"Status da candidatura: ({get_status(status, idade)})")


print("\n\n\n")
