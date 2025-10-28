from funcoes import*

limpar()


matriz = [
  ["Fabricio",28,"Covilha"],
  ["Maria",14,"Lisboa"],
  ["Ana",56,"Amadora"],
  ["Carlos",44,"Porto"]
]
print(f"Matriz Original: {matriz}\n")
print("=== Listagem das pessoas da matriz ===\n")
for m in matriz:
  print(f"{m[0]} - (Idade: {m[1]}) - [Morada: {m[2]}] ")



print("\n\n")