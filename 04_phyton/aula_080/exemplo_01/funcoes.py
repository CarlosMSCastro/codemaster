# Importações
import os
import time
import math
#from globais import*
import globais

#Variavel Global


#funçoes

def exibir_menu():
  print("=== REGISTO DE PESSOAS ===\n")
  print("1 - Registar Pessoa Nova.")
  print("2 - Editar Pessoa.")
  print("3 - Apagar Pessoa.\n")
  print("4 - Verificar Registos.\n")
  print("0 - Sair.\n")
  return int(input("- Opção: "))

def registar():
  limpar()
  print("--- Registo Individual ---")
  nova_pessoa = input("\n-Digite o nome correspondente :  ")
  if nova_pessoa in globais.pessoas:
      print("\n---Este nome já está registado! ---")
  else:
      globais.pessoas.append(nova_pessoa)
      print("\n--- SUCESSO ---")

def editar():
  limpar()
  print("\n\n--- Editar Pessoa---\n")
  print("ID  Nome")
  listar(False)
  id = int(input("\n- ID da pessoa a editar : ")) -1
  if(id >= 0 and id < len(globais.pessoas)):
    novo_nome=input("- Digite o novo nome : ")
    if novo_nome in globais.pessoas:
      print("\n---Este nome já está registado! ---")
    else:
      globais.pessoas.append(novo_nome)
      print("\n--- SUCESSO ---")
    print("\n---SUCESSO---  ")
  else: print("\n--- ID INVÁLIDO ---")

def apagar():
  limpar()
  print("\n\n--- Apagar Pessoa---\n")
  print("ID  Nome")
  listar(False)
  id = int(input("\n- ID da pessoa a apagar : ")) -1
  if(id >= 0 and id < len(globais.pessoas)):
    globais.pessoas.pop(id)
    print("\n---SUCESSO---  ")
  else: print("\n--- ID INVÁLIDO ---")

def listar():
  limpar()
  print("\n--- Lista de Pessoas Registadas ---\n")
  print("ID  Nome")
  for i in range(len(globais.pessoas)):
    print(f"{i+1} - {globais.pessoas[i]}")




































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