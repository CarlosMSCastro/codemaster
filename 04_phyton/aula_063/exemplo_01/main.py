
print("\n\n")
# variaveis
preco1 = 3.00
preco2 = 2.902
preco3 = 4.95
nome = "Carlos"
# executar
print(f"Preço 1: ({round(preco1, 2)})")     #em caso de preços que é necessario 2 casas, o round só dá 1 se for 0
print(f"Preço 2: ({round(preco2, 2)})")     #aqui ficaria 2.9 em vez de 2.90
print(f"Preço 3: ({round(preco3, 2)})")
print() 
print(f"Preço 1: ({preco1:.2f})")            # usa-se o :.2f para que mantenha sempre o numero de casa decimas solicitada
print(f"Preço 2: ({preco2:.2f})")            # neste formamto será mostrado 2.90 em vez de 2.9
print(f"Preço 3: ({preco3:.2f})")
print()
print(f"Capitulo 1 {nome:.<40}")             # efeito estetico de preencher com pontos. < encosta na esquerda
print(f"Capitulo 1 {nome:=>40}")                    # 40 é o numero de caracteres       > encosta na direita
print(f"Capitulo 1 {nome:^40}")                    # 40 é o numero de caracteres       > alinha no centro