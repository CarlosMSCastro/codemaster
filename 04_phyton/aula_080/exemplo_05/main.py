from funcoes import*

limpar()

# 0 = Nome
# 1 = Apelido
# 2 = Nome Pai
# 3 = Login
# 4 = Idade
# 5 = Altura em cm
# 6 = Peso
# 7 = Desconto


dicionario = {
  "nome":"Fabricio",
  "apelido":"Vidal",
  "nome_pai":"Fabricio",
  "login":"fabricio",
  "idade": 29,
  "altura": 191,
  "peso": 99.80,
  "desconto": 40
}

for d in dicionario:
  print(f"{d} - {dicionario[d]}")

print("\n"+"-"*20 + "\n")

print(dicionario.keys())

print("\n"+"-"*20 + "\n")

print(dicionario.values())


print("\n\n")