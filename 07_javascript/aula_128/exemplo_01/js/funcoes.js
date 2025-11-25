function calc_dobro(){

  if(numero_input.value.length > 0){
    let numero = parseInt(numero_input.value);
    let dobro = numero * 2;
    saida.innerHTML = `O dobro de ${numero} é ${dobro}`;
  }
  else{
    saida.innerHTML = "";
  }


}

function calc_dobro_2(){

  let numero = parseInt(numero_input.value);
  if(!isNaN(numero)){
    let dobro = numero * 2;
    saida.innerHTML = `O dobro de ${numero} é ${dobro}`;
  }
  else{
    saida.innerHTML = "";
  }

}

function calc_dobro_3(event){
  event.preventDefault();

  let numero = parseInt(numero_input.value);
  if(!isNaN(numero)){
    let dobro = numero * 2;
    saida.innerHTML = `O dobro de ${numero} é ${dobro}`;
  }
  else{
    saida.innerHTML = "";
  }
}
