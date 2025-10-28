from funcoes import*

limpar()

#teste = [34,"Carlos", True, -6.40, [5,4,7]]

#p1 =["Carlos","Famalicao",28]
#p2 =["Ana","Lisboa",31]
#p3 =["Rui","Viseu",22]

pessoas = [
  ["Carlos","Famalicao",28],
  ["Ana","Lisboa",31],
  ["Rui","Viseu",22]
]

print(pessoas[2][1])
print(pessoas[0][2])
print(pessoas[1][0])

nova_pessoa = ["Joao","Trofa",23]
pessoas.append(nova_pessoa)

#pessoas.append(["Joao","Trofa",23])

pessoas[1][1] = "Amsterdão"
pessoas.pop(0)
print(pessoas)


print("\n\n")