# Importações
import os
import time
import math
#from globais import*
import globais
import random


#funçoes


def gerador(qtd):
  print("\nLista de nomes completos aleatórios:\n")
  for i in range(qtd):
    nome = random.choice(globais.nomes)
    apelido = random.choice(globais.apelidos)
    print(f"{i+1}. {nome} {apelido}")

















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