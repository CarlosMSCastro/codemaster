# Importações
import os
import time
import math
#from globais import*
import globais


def levantar():
  valor = float(input("Insira o valor a ser levantado :\n"))
  if valor <= 0:
    limpar()
    print("Valor inválido!\n")
    print(f"Saldo actual: ({globais.saldo:.2f}) €")
  elif valor > globais.saldo:
    limpar()
    print("Saldo insuficiente, não autorizado.")
    print(f"Saldo actual: ({globais.saldo:.2f}) €")
  else:
    globais.saldo -= valor
    globais.extrato += f"Levantamento: {-valor:>10.2f}€\n"
    limpar()
    print("Levantamento efectuado com sucesso.\n\n\n")
    print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")


def pagar():
  tipo = input("Insira o tipo de pagamento: ")
  valor = float(input("Insira o valor a ser pago: "))
  if valor <= 0:
    limpar()
    print("Valor Inválido. Insira um valor positivo.")
  elif valor > globais.saldo:
    limpar()
    print("Saldo insuficiente para este pagamento.")
  else:
    globais.saldo -= valor
    globais.extrato += f"Pagamento({tipo}):{-valor:>5.2f}€\n"
    limpar()
    print(f"Pagamento de {tipo} efectuado com sucesso.")
    print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")


def depositar():
  valor = float(input("Insira o valor a ser depositado :\n"))
  if valor <=0:
    limpar()
    print("Valor Inválido. Insira um valor positivo.")
    print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")
  else:
    globais.saldo += valor
    globais.extrato += f"Depósito: {+valor:>13.2f}€\n"
    limpar()
    print("Depósito efectuado com sucesso.")
    print(f"Saldo actual após transação: ({globais.saldo:.2f}) €")

def ver_extrato():
    limpar()
    print("===== EXTRATO =====")
    print(f"Saldo actual: {globais.saldo:.2f} €\n")    
    if globais.extrato == "":
        print("Nenhuma transação realizada.")
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