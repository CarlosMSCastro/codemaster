# Importações
import os
import time
import math
#from globais import*
import globais

#Variavel Global
produtos = ["Caneta","Lápis","Mesa","Cadeira"]

#funçoes

def exibir_menu():
  print("=== MENU ===\n")
  print("1 - Registar Produto.")
  print("2 - Editar Produto.")
  print("3 - Apagar Produto.")
  print("4 - Listar Produto.")
  print("0 - Sair.\n")
  return int(input("- Opção: "))

def registar():
  global produtos
  print("--- Registar ---\n")
  novo_produto = input("\n-Digite o novo produto :  ")
  produtos.append(novo_produto)
  print("\n---SUCESSO---  ")
  print(produtos)

def editar():
  global produtos
  print("\n\n--- Editar ---\n")
  id = int(input("- ID do produto que pretende editar : ")) -1
  if(id >= 0 and id < len(produtos)):
    novo_nome=input("- Digite o novo nome : ")
    produtos[id]= novo_nome
    print("\n---SUCESSO---  ")
  else: print("\n--- ID INVÁLIDO ---")

def apagar():
  global produtos
  print("\n\n--- Apagar ---\n")
  id = int(input("- ID do produto que pretende apagar : ")) -1
  if(id >= 0 and id < len(produtos)):
    produtos.pop(id)
    print("\n---SUCESSO---  ")
  else: print("\n--- ID INVÁLIDO ---")

def listar():
  global produtos
  limpar()
  print("\n--- Lista dos Produtos ---\n")
  for i in range(len(produtos)):
    print(f"{i+1} - {produtos[i]}")




































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