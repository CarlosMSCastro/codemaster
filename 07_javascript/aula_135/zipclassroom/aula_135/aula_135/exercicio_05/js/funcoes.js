function enviar(event){
  event.preventDefault();
  let texto = texto_input.value;
  let tempo = parseFloat(tempo_input.value) * 1000;
  // setTimeout(function(){alert(texto);}, tempo);
  setTimeout(() => {alert(texto);}, tempo);
  formulario.reset();
}