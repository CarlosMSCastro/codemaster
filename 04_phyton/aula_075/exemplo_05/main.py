from funcoes import*


limpar()

opcao = ""
while(opcao.lower() != "s"):
  print("---MULTIBANCO---\n")
  print("(l) - Levantamento")
  print("(p) - Pagamento")
  print("(d) - Depósito")
  print("(s) - sair")
  opcao = input("- Opção: ")
  
  limpar()

  if(opcao.lower() == "l"): levantar()
  elif(opcao.lower() == "p"): pagar()
  elif(opcao.lower() == "d"): depositar()
  elif(opcao.lower() == "s"): animar("Sair")
  else: print("----Opção Invalida---")

  prima_enter()
  limpar()

print("\n\n")
