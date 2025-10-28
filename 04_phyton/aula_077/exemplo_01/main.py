from funcoes import*

limpar()

p1 = "fabricio"
p2 = "ana"
p3 = "carlos"

pessoas = ["fabricio", "ana","tiago"]  #criar um array
print(pessoas[0])
print(pessoas[1])
print(pessoas[2])

print()

pessoas[0] = "Ronaldo"  #editar posição especifico
print(pessoas[0])
print()

#Adicionar um novo elemento no final
pessoas.append("Jorge")
print(pessoas)
print()

#Adicionar elemento em posição especifica
pessoas.insert(1,"Miguel")
print(pessoas)
print()

#Apagar um elemento no final
pessoas.pop()
print(pessoas)
print()

#Apagar um elemento especifico
pessoas.pop(1)
print(pessoas)
print()

#apagar pelo seu conteudo
pessoas.remove("ana")
print(pessoas)
print

#Apagar varios elementos sequenciais
clubes = ["porto","Real Madrid","Chelsea","Barcelona","Man City"]
del clubes[1:3]  #ultima posição +1
print(clubes)




print("\n\n")

