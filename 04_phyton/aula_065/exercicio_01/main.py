print("\n\n\n")
print("====== Roupa para passeio ======")
print("=== Inicio ===")
print()
temp = float(input("Qual a temperatura atual ?"))
chuva = str(input("Está a chover ?"))


if temp <= 18:
    if chuva == "sim":
        print("Vestir roupas grossas e casaco, e pegar guarda-chuva.")
    else:
        print("Vestir roupas grossas e casaco, e ir passear.")

elif temp < 28:
    if chuva == "sim":
        print("Vestir roupas normais e pegar guarda-chuva.")
    else:
        print("Vestir roupas normais e ir passear.")

else:
    if chuva == "sim":
        print("Vestir roupas de praia e pegar guarda-chuva.")
    else:
        print("Vestir roupas de praia e ir passear.")

print()
print("=== FIM ===")

print("\n\n\n")