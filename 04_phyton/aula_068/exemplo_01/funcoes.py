# Importações
import os
import time


def get_status(status, idade):
  status = status.lower()
  if(status=="sim" and idade >= 18):return "APROVADO PARA O ESTÁGIO"
  elif(status=="nao" and idade >= 18):return "NÃO APROVADO PARA O ESTÁGIO"
  elif(status=="sim" and idade < 18):return "APROVADO PARA A ESCOLA DE PROGRAMAÇÃO"
  elif(status=="nao" and idade < 18):return "NÃO APROVADO PARA A ESCOLA DE PROGRAMAÇÃO"
  else:return "ERROS NA INSERÇÃO DE DADOS. TENTE NOVAMENTE"



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