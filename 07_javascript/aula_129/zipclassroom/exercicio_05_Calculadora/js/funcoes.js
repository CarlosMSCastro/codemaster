var buffer_1;
var buffer_2;
var operacao;


function operar(elemento){
  operacao = elemento.innerHTML;
  buffer_1 = parseFloat(ecra.innerHTML);
  limpar();
}

function finalizar(){
  buffer_2 = parseFloat(ecra.innerHTML);
  let resultado;
  switch(operacao){
    case "+": 
      resultado = buffer_1 + buffer_2;
      break;
    case "-":
      resultado = buffer_1 - buffer_2;
      break;
  }
  ecra.innerHTML = resultado;
}








function teclar(elemento){

  let caracter = elemento.innerHTML;

  if(ecra.innerHTML.length < 10){
    if(caracter == "."){
      if(!ecra.innerHTML.includes(".")){
        ecra.innerHTML += caracter;
      }
    }
    else if(caracter == "-"){
      if(ecra.innerHTML.length == 0){
        ecra.innerHTML += caracter;
      }
    }
    else{
      ecra.innerHTML += caracter;
    }
  }
}

function limpar(){ecra.innerHTML = "";}