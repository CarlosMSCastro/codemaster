from funcoes import*

limpar()
print(f"=== PESQUISADOR DE MULTIPLOS ===\n")
num = int(input("- Escreva um numero inteiro positivo : "))
print(f"\n--- Múltiplos de {num} entre 0 e 100 ---\n")
mult=0
while(mult * num <= 100):
    print(f"({num*mult})")
    mult +=1

print("\n\n\n")