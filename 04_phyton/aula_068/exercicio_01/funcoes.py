# Importações
import os
import time
import math


def rect():
  br=float(input("- Digite o valor da base do rectângulo: "))
  ar=float(input("- Digite o valor da altura do rectângulo: "))
  resultador = br * ar
  limpar()
  print("\n\n===== Cálculo de Áreas com Funções =====\n")
  print(f"A área do rectângulo 🟥 é de ({resultador:.1f})")

def tria():
  bt=float(input("- Digite o valor da base do Triangulo: "))
  at=float(input("- Digite o valor da altura do Triangulo: "))
  resultadot = (bt * at)/2
  limpar()
  print("\n\n===== Cálculo de Áreas com Funções =====\n")
  print(f"A área do Triangulo 📐 é de ({resultadot:.1f})")

def circ():
  raio=float(input("- Digite o valor do raio do circulo: "))
  resultadoc = math.pi*raio**2
  limpar()
  print("\n\n===== Cálculo de Áreas com Funções =====\n")
  print(f"A área do Circulo 🔴 é de ({resultadoc:.1f})")
























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