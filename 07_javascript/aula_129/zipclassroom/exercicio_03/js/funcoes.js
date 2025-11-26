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

function limpar(){
  ecra.innerHTML = "";
  saida.innerHTML = "";
}