from funcoes import*

limpar()

resposta = input("- Desejas começar o loop? ")

print()

tentativas = 1
while(resposta.lower() == "sim" and tentativas <= 5):
  resposta = input("- Deseja continuar o loop? ")
  tentativa += 1


print("\n\n\n")

