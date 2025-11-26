function teclar(caracter){
  if(ecra.innerHTML.length <10){
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
    calc_c_to_k();
    calc_c_to_f();
  }
}

function limpar(){
  ecra.innerHTML = "";
  saida.innerHTML = "";
}

function calc_c_to_k(){
  let celsius = parseFloat(ecra.innerHTML);
  if(!isNaN(celsius)){
    let kelvin = celsius + 273.15;
    saida_1.innerHTML =  kelvin.toFixed(2) + " ºK";
  }
  else{saida_1.innerHTML = "";}
}

function calc_c_to_f(){
  let celsius = parseFloat(ecra.innerHTML);
  if(!isNaN(celsius)){
    let far = (celsius * 1.8) + 32;
    saida_2.innerHTML =  far.toFixed(2) + " F";
  }
  else{saida_2.innerHTML = "";}
}