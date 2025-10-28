from funcoes import*

limpar()

#teste = [34,"Carlos", True, -6.40, [5,4,7]]

#p1 =["Carlos","Famalicao",28]
#p2 =["Ana","Lisboa",31]
#p3 =["Rui","Viseu",22]

vetor=["Jorge","Carlos","Francisco"]
matriz = [
  ["Carlos","Famalicao",28],
  ["Ana","Lisboa",31],
  ["Rui","Viseu",22]
]

for v in vetor:
  print(v)

print("\n"+"-"*20 + "\n")

for m in matriz:
  print(f"{m[0]} - (Morada: {m[0]}) [Idade: {m[2]}] ")

print("\n"+"-"*20 + "\n")

for i in range(len(matriz)):
  print(f"{i+1} - {matriz[i][0]} (Morada: {matriz[i][1]}) [Idade: {matriz[i][2]}]")

print("\n\n")