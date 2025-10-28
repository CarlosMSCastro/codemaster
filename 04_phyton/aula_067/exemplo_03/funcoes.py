# Importações
import os
import time


# Funções

def get_status(idade):
  if(idade > 18): print("Já pode votar")
  else: print("Não pode votar")

def get_status2(idade):
  if(idade > 18): print("Já pode votar")
  else: return "Não pode votar"







































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