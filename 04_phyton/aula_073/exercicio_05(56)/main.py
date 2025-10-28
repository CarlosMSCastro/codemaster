from funcoes import*

limpar()

print("===== Calculador de tabuadas =====")

num = int(input("\n- Qual a tabuada que pretende obter?    "))
while num < 0 or num > 10:
    print("Valor inválido!\n")
    num = int(input("\n- Qual a tabuada que pretende obter (0 a 10) ?    "))
print(f"\nTabuada do {num}:\n")
for i in range(1, 11):
    print(f"{num} x {i} = {num * i}")

print("\n\n")
