from funcoes import*

print("\n\n\n")
temp = float(input("🌡️   Temperatura em Celsius : "))

k_ou_f = input("Converter para (K)elvin ou (F)ahrenheit ? ")

if(k_ou_f == "K" or k_ou_f == "k"):           # podia usar k_ou_f.lower
  converterK(temp)
elif(k_ou_f == "F" or k_ou_f == "f"):
  converterF(temp)
else:
  print("❌ Opção inválida")

print("\n\n\n")
