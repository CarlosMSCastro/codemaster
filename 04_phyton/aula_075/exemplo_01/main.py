from funcoes import*

limpar()

tentativas = 1
resposta = ""
while(resposta != "nao"):
  resposta = input("Continuar este loop ? ")
  if(resposta == "nao"):break
  tentativas +=1

print(f"Foram executados {tentativas} loops")
print("\n\n")
