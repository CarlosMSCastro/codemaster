
function alerta(){
  alert("Fim");
}

function gerar_nums(event){
  let inicio = num_inicial.value;
  let final = num_final.value;
  let segundos = tempo.value * 1000;
  let temporizacao = 0;
  event.preventDefault();
  sa

  if (inicio <= final){
    for (let i = inicio; i <= final; i++){
      temporizacao += segundos;
      setTimeout(() =>{saida.innerHTML += i + "<br>";},  temporizacao);
    }
  }else{
    for (let i = inicio; i >= final; i--){
      temporizacao += segundos;
      setTimeout(() =>{saida.innerHTML += i + "<br>";},  temporizacao);
    }
  }
  saida.classList.remove("d-none");
  formulario.reset();
  setTimeout(alerta, temporizacao + segundos)
}
