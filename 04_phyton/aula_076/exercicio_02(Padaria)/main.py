from funcoes import*


opcao = ""
while(opcao != 0):
  print()
  print()
  print("=====PADARIA PHYTON=====\n")
  print("(1) - Efetuar Venda")
  print("(2) - Ver histórico de Vendas\n")
  print("(0) - Sair\n\n\n")
  opcao = int(input("Opção pretendida: "))
  limpar()
  if(opcao == 1): vender()
  elif(opcao == 2): historico()
  elif(opcao == 0): animar("A fechar com segurança")
  else: print("----Opção Invalida---")
  prima_enter()
  limpar()
print("\n\n")

