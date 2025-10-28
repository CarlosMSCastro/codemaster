# Importações
import os
import time
import math

#Funções
def testemacas(valor):
  if(valor<12):
    preco=valor*1.3
    print(f"\nO preço das {valor:.0f} maças é de {preco:.2f} R$")
  else:
    preco= valor
    print(f"\nO preço das {valor:.0f} maças é de {preco:.2f} R$")
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