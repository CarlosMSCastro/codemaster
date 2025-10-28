# Importações
import os
import time
import math

#Funções
def teste(nota1,nota2):
  media = (nota1 + nota2)/2
  if(media>=6):
    print(f"\nA sua média é de {media}, e está aprovado!")
  else: 
    print(f"\nA sua média é de {media}, e não está aprovado!")


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