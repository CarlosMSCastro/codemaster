# Importações
import os
import time
import math

#Funções

def calculo(nota1, nota2, nota3):
  media = ((nota1*2)+(nota2*3)+(nota3*5))/10
  return print(f"\nA média final do aluno é de {media:.1f} valores")

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