# Importações
import os
import time
import math
#from globais import*
import random


#funçoes

produtos = []
vendas = []


def exibir_menu():
  limpar()
  print("=== Loja Phyton ===\n")
  print("1 - Registar Produto.")
  print("2 - Editar Produto.")
  print("3 - Apagar Produto.")
  print("4 - Listar Produtos.\n")
  print("5 - Vender.")
  print("6 - Listar Vendas.\n")
  print("0 - Sair.\n")
  return input ("- Opção: ")

def registar():
  limpar()
  global produtos, vendas
  print("--- Registar Produto ---\n")
  nome = input("- Digite o nome do novo produto: ")
  preco = float(input("- Digite o preço do novo produto: "))
  qt = int(input("- Digite a quantidade deste produto: "))
  produtos.append(novo_produto(nome, preco, qt))
  print("\n--- SUCESSO ---")

def editar():
    global produtos, vendas
    print("--- Editar ---\n")
    listar(False)
    while True:
        entrada = input("\n- Digite o ID do produto a ser editado (0 para cancelar): ")
        if entrada == "" or entrada == "0":
            print("--- Operação cancelada ---")
            return
        for i in range(len(produtos)):
            if entrada == str(i+1):
                id = i
                break
        else:
            print("--- ID inválido, tente novamente ---")
            continue 
        

        break 
    produto = produtos[id]
    print(f"\n#{id+1} - (Nome: {produto['nome']}) "
          f"(Preço : {produto['preco']:.2f}€) "
          f"(Quantidade: {produto['qt']})\n")

    print("--- Menu de Edição ---\n")
    print("1 - Nome.")
    print("2 - Preço.")
    print("3 - Quantidade.")
    print("0 - Cancelar.\n")

    opcao = input("- Opção: ")

    if opcao == "" or opcao == "0":
        print("--- Operação cancelada ---")
        return
    elif opcao == "1":
        produto["nome"] = input(f"- Digite o novo nome que substitui ({produto['nome']}) : ")
    elif opcao == "2":
        produto["preco"] = float(input(f"- Digite o novo preço para substituir ({produto['preco']}) : "))
    elif opcao == "3":
        produto["qt"] = int(input(f"- Digite a nova quantidade para substituir ({produto['qt']}) : "))
    else:
        print("--- OPÇÃO INVÁLIDA ---")
        return

    print("\n--- Sucesso ---")


def apagar():
  global produtos, vendas
  print("--- Apagar ---")
  listar(False)
  while True:
    entrada = input("\n- Digite o ID do produto a ser apagado (0 para cancelar): ")
    if entrada == "" or entrada == "0":
      print("--- Operação cancelada ---")
      return
    for i in range(len(produtos)):
      if entrada == str(i+1):
        id = i
        break
    else:
      print("--- ID inválido, tente novamente ---")
      continue
    break 
  removido = produtos.pop(id)
  print(f"\n--- Produto '{removido['nome']}' apagado com sucesso ---")


def listar(com_titulo):
  global produtos, vendas
  limpar()
  if(com_titulo):
    print("--- Lista de Produtos ---\n")
  for i in range(len(produtos)):
    print(f"#{i+1} - (Nome: {produtos[i]['nome']}) (Preço : {produtos[i]['preco']:.2f}€) (Quantidade: {produtos[i]['qt']}).")


def novo_produto(nome, preco, qt):
  dicionario = {
    "nome": nome,
    "preco": preco,
    "qt": qt,
  }
  return dicionario


produtos = [
    novo_produto("Cadeira", 25.0, 5),
    novo_produto("Óculos", 15.0, 10),
    novo_produto("Livro", 12.5, 8),
    novo_produto("Caneta", 1.2, 50),
]


def vender():
    global produtos, vendas
    limpar()
    print("--- Vender Produto ---\n")
    listar_sem_limpar()
    
    
    id = int(input("\n- Digite o ID do produto a vender (0 para cancelar): ")) - 1
    if id == -1:
        print("--- Operação cancelada ---")
        return
    if not (0 <= id < len(produtos)):
        print("--- ID inválido ---")
        return

    produto = produtos[id]

    qtd = int(input(f"- Quantidade de ({produto['nome']}) a ser vendida: "))
    if qtd > produto['qt']:
        print("--- Quantidade insuficiente ---")
        return

    produto['qt'] -= qtd
    total = produto['preco'] * qtd

    venda = {
        "produto": produto['nome'],
        "preco_unitario": produto['preco'],
        "quantidade": qtd,
        "total": total
    }
    vendas.append(venda)

    venda_num = len(vendas)
    print(f"\nVenda #{venda_num} - {produto['nome']} ({produto['preco']:.2f}€) x ({qtd} uni.) = ({total:.2f} €)")
    print("\n--- Sucesso ---")


def listar_vendas():
    limpar()
    if not vendas:
        print("--- Nenhuma venda realizada ---\n")
        return

    print("===== HISTÓRICO DE VENDAS =====\n")

    i = 1 
    for v in vendas:
        print(f"Venda #{i} - {v['produto']} ({v['preco_unitario']:.2f}€) x ({v['quantidade']} uni.) = ({v['total']:.2f} €)")
        i += 1


    total_geral = 0
    for v in vendas:
        total_geral += v['total']

    print(f"\nTotal de Vendas: {len(vendas)}")
    print(f"Total Geral: ({total_geral:.2f} €)\n")


def listar_sem_limpar():
    global produtos
    for i in range(len(produtos)):
        print(f"#{i+1} - {produtos[i]['nome']} (Preço: {produtos[i]['preco']:.2f}€) [Qtd: {produtos[i]['qt']}]")






#Funçoes Especiais

def limpar():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def aguarde(tempo): time.sleep(tempo)

def animar(texto):
  print(texto, end="", flush=True) #tratar cada print individual
  aguarde(0.5)
  print(".", end="", flush=True)
  aguarde(0.5)
  print(".", end="", flush=True)
  aguarde(0.5)
  print(".", end="", flush=True)

def prima_enter():
  input("\n--- Prima ENTER para continuar ---")
  limpar()