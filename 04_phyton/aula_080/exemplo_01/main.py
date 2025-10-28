from funcoes import*

limpar()

opcao = None
while(opcao != 0):
  limpar()
  limpar()
  opcao=exibir_menu()
  if(opcao == 1): registar()
  elif(opcao == 2): editar()
  elif(opcao == 3): apagar()
  elif(opcao == 4): listar(True)
  elif(opcao == 0): animar("A Sair")
  else:print("---OPÇÃO INVÁLIDA!---")

  prima_enter()


print("\n\n")