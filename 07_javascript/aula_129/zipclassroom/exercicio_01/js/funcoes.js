function teclar(caracter){
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
    calc_dolar();
  }
}

function limpar(){
  ecra.innerHTML = "";
  saida.innerHTML = "";
}

function calc_dolar(){
  let euro = parseFloat(ecra.innerHTML);
  if(!isNaN(euro)){
    let resultado = euro * 1.03;
    saida.innerHTML = "$ " + resultado.toFixed(2);
  }
  else{saida.innerHTML = "";}
}