# Importações
import os
import time
import math
#from globais import*
import globais


def vender():
  produto = input("Qual produto será vendido ?    ")
  animar("")
  limpar()
  print(f"Produto seleccionado : {produto}\n")
  valor = float(input("Defina o Preço final da Venda :   "))
  if valor <= 0:
    limpar()
    print("Valor inválido!\n")
    print(f"Saldo actual: ({globais.saldo:.2f}) €")
  else:
    globais.saldo += valor
    globais.extrato += f"{produto}   {valor:.2f}€\n"
    limpar()
    print("Venda Registada com sucesso.\n\n")
    print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")


def historico():
    limpar()
    print("===== HISTÓRICO DE VENDAS =====\n")
    print(f"Total de Vendas: ({globais.saldo:.2f}) €\n\n")    
    if globais.extrato == "":
        print("Nenhuma venda realizada.\n\n")
    else:
        print(globais.extrato)














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