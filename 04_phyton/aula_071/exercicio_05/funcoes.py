# Importações
import os
import time
import math

#Funções
def testepos(valor):
  if(valor==0):print("\n\nÉ ZERO!")
  elif(valor<0):print("\n\nÉ NEGATIVO")
  else:print("\n\nÉ POSITIVO")
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