# Importações
import os
import time


# Funções

def saudar():
  print("Boa noite!")

def saudar_2(nome):
  print(f"Boa noite {nome}")

def saudar_com_retorno():
  return "Boa noite Codemaster"

def desconto(preco):
  resultado = preco * 0.90
  print(resultado)

def desconto_com_retorno(preco):
  resultado = preco * 0.90
  return resultado

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