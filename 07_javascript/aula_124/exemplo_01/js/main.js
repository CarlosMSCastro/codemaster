var saldo = 123.56;

if(saldo <= 20){
    console.log("Ficar em casa.");
}
else if(saldo <= 40){
    console.log("Ir ao shopping.");
}
else{
    console.log("Fazer pequena viagem.");
}

//switch

var opcao = 2;

switch(opcao){
    case 1:
        console.log("Criar colaborador");
        break;
    case 2:
        console.log("Editar colaborador");
        break;
    case 3:
        console.log("Apagar colaborador");
        break;
    case 4:
        console.log("Listar todos colaboradores");
        break;
    default:
        console.log("Opçãol inválida");
        break;
    }