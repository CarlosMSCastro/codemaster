from funcoes import*

limpar()

opcao = ""
while(opcao != "0"):
  opcao = exibir_menu()

  if (opcao == "1"): registar()
  elif (opcao == "2"): editar()
  elif (opcao == "3"): apagar()
  elif (opcao == "4"): listar(True)
  elif (opcao == "5"): vender()
  elif (opcao == "6"): listar_vendas()
  elif (opcao == "0"): animar("A sair")
  else: print("--- OPÇAO INVALIDA ---")

  prima_enter()

print("\n\n")