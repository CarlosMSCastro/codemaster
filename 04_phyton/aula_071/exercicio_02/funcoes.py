# Importações
import os
import time
import math

#Funções
def testedez(valor):
  if (valor>10):print("\n\nÉ MAIOR QUE 10!")
  else:print("\n\nNÃO É MAIOR QUE 10!")
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