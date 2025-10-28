from funcoes import*

limpar()

saldo= 500
def levantar(valor):
  global saldo
  #saldo = 500
  saldo -= valor
  print(f"Saldo actual após transação: ({saldo:.2f}) €")

def pagar(valor):
  global saldo
  #saldo = 500
  saldo -= valor
  print(f"Saldo actual após transação: ({saldo:.2f}) €")

def depositar(valor):
  global saldo
  saldo += valor
  print(f"Saldo actual após transação: ({saldo:.2f}) €")

levantar(200)
levantar(200)
pagar(50)
depositar(300)

print("\n\n")
