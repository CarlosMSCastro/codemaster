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

    calc();
  }
}

function limpar(){
  ecra.innerHTML = "";
  saida.innerHTML = "";
}

function calc(){
  let c = parseFloat(ecra.innerHTML);
  if(!isNaN(c)){
    let f = c * 1.8 + 32;
    let k = c + 273.15;
    saida_f.innerHTML = f.toFixed(2) + " F";
    saida_k.innerHTML = k.toFixed(2) + " K";
  }
}