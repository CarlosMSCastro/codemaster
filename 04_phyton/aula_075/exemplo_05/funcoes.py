# Importações
import os
import time
import math
#from globais import*
import globais


def levantar():
  valor = float(input("Quanto o valor a ser levantado"))
  globais.saldo -= valor
  print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")

def pagar():
  valor = float(input("Quanto o valor a ser pago"))
  globais.saldo -= valor
  print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")

def depositar():
  valor = float(input("Quanto o valor a ser depositado"))
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

def prima_enter():
  input("\n--- Prima ENTER para continuar ---")