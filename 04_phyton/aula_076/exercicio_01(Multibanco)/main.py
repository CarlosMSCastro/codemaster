from funcoes import*


opcao = ""
while(opcao != 5):
  print("=====MULTIBANCO PHYTON=====\n")
  print(f"Nome : {globais.nome}")
  print(f"Saldo: {globais.saldo:.2f} €\n")
  print("(1) - Levantamento")
  print("(2) - Depósito")
  print("(3) - Pagamento")
  print("(4) - Ver histórico de operações\n")
  print("(5) - sair\n")
  opcao = int(input("- Insira a opção pretendida: "))
  limpar()
  if(opcao == 1): levantar()
  elif(opcao == 2): depositar()
  elif(opcao == 3): pagar()
  elif(opcao == 4): ver_extrato()
  elif(opcao == 5): animar("Sair")
  else: print("----Opção Invalida---")
  prima_enter()
  limpar()
print("\n\n")

