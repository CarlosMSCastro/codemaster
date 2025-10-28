print("\n\n\n")

#funções
def boas():
  print("Bom Dia Codemaster!")
  print("Boa Tarde Codemaster!")
  print("Boa Noite Codemaster!")

def calcular_imc(peso, altura):
  imc = peso / altura ** 2
  print(f"IMC: ({imc:.1f})")

#executar
boas()
calcular_imc(67, 1.75)
calcular_imc(70, 1.85)
calcular_imc(75, 1.89)
print("\n\n\n")