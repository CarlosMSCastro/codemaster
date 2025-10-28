from funcoes import*

limpar()
question = (input("Quer tirar a carta de condução❓ ")).lower()
if question == "nao":
    print("\nOpte pelo uso de transportes públicos. 🚌 \n\n\n")
else:
    teste = 1
    passar = "nao" 
    while passar == "nao":
        print(f"\n\nEstudar para o {teste}º teste.")
        animar("")
        passar = input(f"\nPassou no {teste}º Teste ❓ ").lower()       
        if passar == "sim":
            print(f"\nParabéns! Foste aprovado no {teste}º teste.")
            aguarde(1)
            print("É agora detentor de carta de condução.")
        else:
            teste += 1


print("\n\n\n")