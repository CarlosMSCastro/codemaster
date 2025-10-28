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

clientes = [
  ["Fabricio","Vidal","Fabricio","fabricio",29,191,99.80, 50],
  ["Maria","Silva","João","maria",67,161,59.80, 10],
  ["Ana","Sousa","José","ana",33,186,69.70, 30],
  ["Fabricio","Vidal","Mário","mateus",18,291,99.80, 5]
]

c1 =  ["Fabricio","Vidal","Fabricio","fabricio",29,191,99.80, 50]
print(c1[6])
c1[4] = 30


c2 = {"nome":"Fabricio",
      "apelido":"Vidal",
      "nome_pai":"Fabricio",
      "login":"fabricio",
      "idade": 29,
      "altura": 191,
      "peso": 99.80,
      "desconto": 40
}

print(f"{c2['peso']:.3f}")
c2["idade"] = 30


print("\n\n")