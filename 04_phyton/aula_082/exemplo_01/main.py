from funcoes import*

limpar()

opcao = ""
while(opcao.lower() != "x"):
  opcao = exibir_menu()


  if (opcao.lower() == "a"): registar()
  elif (opcao.lower() == "b"): editar()
  elif (opcao.lower() == "c"): apagar()
  elif (opcao.lower() == "d"): listar(True)
  elif (opcao.lower() == "x"): animar("A sair")
  else: print("--- OPÇAO INVALIDA ---")

  prima_enter()

print("\n\n")