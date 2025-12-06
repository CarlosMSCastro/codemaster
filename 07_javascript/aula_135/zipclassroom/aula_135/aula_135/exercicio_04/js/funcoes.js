var texto = "";

function enviar(event){
  event.preventDefault();
  texto = texto_input.value;
  let tempo = parseFloat(tempo_input.value) * 1000;
  setTimeout(alertar, tempo);
  formulario.reset();
}

function alertar(){
  alert(texto);
}