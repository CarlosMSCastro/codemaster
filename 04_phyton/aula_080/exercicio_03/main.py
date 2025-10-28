from funcoes import*

limpar()


dicionario = {
  "nome":"Fabricio",
  "idade":28,
  "morada":"Covilhã",
}

print("====== Dicionario com FOR ======\n")
for d in dicionario:
  print(f"{d}: {dicionario[d]}")


print("\n\n\n====== Dicionario apenas com as chaves ======\n")
print(dicionario.keys())


print("\n\n\n\n====== Dicionario apenas com os valores ======\n")
print(dicionario.values())


print("\n\n\n\n\n")