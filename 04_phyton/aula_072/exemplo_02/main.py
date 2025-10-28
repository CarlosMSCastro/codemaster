from funcoes import*

limpar()


quantidade = int(input("Quantos numeros serão analizados ? "))
par=0
impar=0
for loop in range(quantidade):
  numerodigitado = int(input(f"- Digite o {loop}º número: "))
  if(numerodigitado %2 == 0): pares +=1
  else: impares +=1

#loop=1


#while (loop <= quantidade):
#    numero = int(input(f"Digite o {loop}º numero a ser analizado: "))
#    if (numero % 2 == 0):
#        par +=1
#    else:
#        impar +=1
#    loop += 1

print("\n\n\n")