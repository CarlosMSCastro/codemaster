# Importações
import os
import time
import math



def pedir_nota(mensagem):
    while True:
        nota = float(input(mensagem))
        if 0 <= nota <= 10:
            return nota
        else:
            print("❌ Nota inválida! Digite um valor entre 0 e 10.\n")
























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