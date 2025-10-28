from funcoes import*

limpar()

clubes = ["Porto","Real Madrid","Chelsea","Barcelona",]
cidades = ["Madrid", "Paris","Leiria","Leixões","Braga"]
precos = [2,99,1200,400]

clubes.sort()
precos.sort()
print(clubes)
print(precos)

clubes.sort(reverse=True)
precos.sort(reverse=True)
print(clubes)
print(precos)

if("Braga" in clubes): print("SIM")
else: print("NAO")

novo = clubes + cidades # util para pesquisar sem trocar os originais
print(novo)

clubes.extend(cidades) #juntar os 2 vetores alterando o original
print(clubes)

clubes.clear()
print(clubes)


print("\n\n")

