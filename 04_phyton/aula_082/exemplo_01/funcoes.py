# Importações
import os
import time
import math
#from globais import*
import globais
import random


#funçoes

pessoas = []

def exibir_menu():
  limpar()
  print("=== Menu ===\n")
  print("A - Registar Pessoa.")
  print("B - Editar Pessoa.")
  print("C - Apagar Pessoa.")
  print("D - Listar Registos.")
  print("X - Sair.\n")
  return input ("- Opção: ")

def registar():
  limpar()
  print("--- Registar ---")
  nome = input("- Digite o nome da nova pessoa: ")
  peso = float(input("- Digite o PESO(KG): "))
  altura = float(input("- Digite o ALTURA(cm): "))
  dicionario ={
    "nome": nome,
    "peso": peso,
    "altura": altura,
  }
  pessoas.append(dicionario)
  print("\n--- SUCESSO ---")

def editar():
  print("--- Editar ---\n")
  listar(False)
  id = int(input("- Digite o ID da pessoa a ser editada:")) -1
  print()
  if(id >= 0 and id< len(pessoas)):

    print("A - Editar nome.")
    print("B - Editar Peso.")
    print("C - Editar Altura.\n")
    opcao = input("- Opçao: ")

    print()
    if(opcao.lower() == "a"):
      pessoas[id]["nome"] = input(f"- Digite o novo nome: ")
    elif(opcao.lower() == "b"):
      pessoas[id]["peso"] = float(input(f"- Digite o novo peso: "))
    elif(opcao.lower() == "c"):
      pessoas[id]["altura"] = float(input(f"- Digite o novo altura: "))
    else:
      print("--- OPÇAO INVALIDA ---")
      return
    
    print("\n--- Sucesso ---")
  else:
    print("--- ID INVALIDO ---")


def apagar():
  print("--- Apagar ---")
  listar(False)
  id = int(input("- Digite o ID da pessoa a ser apagada")) -1
  pessoas.pop(id)
  print("\n--- SUCESSO ---")

def listar(com_titulo):
  limpar()
  if(com_titulo):
    print("--- Lista de Pessoas ---\n")
  for i in range(len(pessoas)):
    imc= calc_imc(pessoas[i]["peso"], pessoas[i]["altura"])
    print(f"{i+1} - {pessoas[i]['nome']} (Peso :{pessoas[i]['peso']:.2f}KG) [Altura: {pessoas[i]['altura']:.2f}] (IMC : {imc})")

def calc_imc(peso, altura):
  imc=peso / altura ** 2
  return f"IMC: {imc:.1f}"


def nova_pessoa(nome, peso, altura):
  dicionario = {
    "nome": nome,
    "peso": peso,
    "altura": altura
  }
  return dicionario


pessoas = [
  nova_pessoa("Fabricio Vidal", 102.5, 1.91),
  nova_pessoa("Ana Silva", 68.5, 1.81),
  nova_pessoa("Carlos Castro", 72.5, 1.81),
]














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