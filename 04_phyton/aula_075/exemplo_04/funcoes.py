# Importações
import os
import time
import math
#from globais import*
import globais


def levantar(valor):
  #global saldo
  globais.saldo -= valor
  print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")

def pagar(valor):
  #global saldo
  globais.saldo -= valor
  print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")

def depositar(valor):
  #global saldo
  globais.saldo += valor
  print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")

















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