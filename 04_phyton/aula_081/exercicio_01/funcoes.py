# Importações
import os
import time
import math
#from globais import*
import globais
import random


#funçoes

colaboradores = []

def exibir_menu():
  limpar()
  print("=== Gestão de Colaboradores ===\n")
  print("1 - Novo Colaborador.")
  print("2 - Editar Colaborador.")
  print("3 - Apagar Colaborador.\n")
  print("4 - Listar todos os Colaboradores.\n")
  print("0 - Sair.\n")
  return input ("- Opção: ")

def registar():
  global colaboradores
  limpar()
  print("--- Novo Colaborador ---\n")
  nome = input("- Digite o NOME : ")
  cargo = input("- Digite o CARGO : ")
  ordenado = float(input("- Digite o ORDENADO: "))
  
  colaborador = novo_colaborador(nome, cargo, ordenado)
  colaboradores.append(colaborador)
  
  print("\n--- SUCESSO ---")

def editar():
  global colaboradores
  print("--- Editar ---\n")
  listar(True)
  id = int(input("- Digite o ID do Colaborador: ")) -1
  print()
  if(id >= 0 and id< len(colaboradores)):
    print("\n--- Editar ---\n")
    print("1 - Nome.")
    print("2 - Cargo")
    print("3 - Ordenado\n")
    print("0 - Cancelar\n")
    opcao = input("- Opçao: ")

    print()
    if(opcao == "1"):
      colaboradores[id]["nome"] = input(f"- Digite o NOME que substituirá: {colaboradores[id]['nome']}: ")
    elif(opcao == "2"):
      colaboradores[id]["cargo"] = input(f"- Digite o CARGO que substituirá: {colaboradores[id]['cargo']}: ")
    elif(opcao == "3"):
      colaboradores[id]["ordenado"] = input(f"- Digite o ORDENADO que substituirá: {colaboradores[id]['ordenado']}: ")
    elif(opcao == "0"):
      return
    else:
      print("--- OPÇAO INVALIDA ---")
      return
    
    print("\n--- Sucesso ---")
  else:
    print("--- ID INVALIDO ---")


def apagar():
  global colaboradores
  print("--- Apagar ---")
  listar(True)
  id = int(input("- Digite o ID da pessoa a ser apagada: ")) -1
  if 0 <= id < len(colaboradores):
    colaboradores.pop(id)

  else:
    print("--- ID INVÁLIDO ---")
    print("\n--- Sucesso ---")

    
def listar(com_titulo):
  global colaboradores
  limpar()
  if(com_titulo):
    print("--- Lista de Colaboradores ---\n")
  total_ordenados = 0
  for i in range(len(colaboradores)):
    print(f"(ID: {i+1}) | (Nome: {colaboradores[i]['nome']}) | (Cargo: {colaboradores[i]['cargo']}) | (Ordenado: {colaboradores[i]['ordenado']} €)")
    total_ordenados += colaboradores[i]['ordenado']
  print(f"\nTotal de Colaboradores: ({len(colaboradores)})")
  print(f"Total dos Ordenados: ({total_ordenados:.2f} €)\n")


def novo_colaborador(nome, cargo, ordenado):
  dicionario = {
    "nome": nome,
    "cargo": cargo,
    "ordenado": ordenado
  }
  return dicionario














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