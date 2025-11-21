function enviar(event){
  event.preventDefault();
  let nome = nome_input.value;
  let cor = color.value;
  saida.innerHTML = `Bem-Vindo (${nome}), escolheste a cor (${cor}).`;
  document.body.style.backgroundColor = cor;
}
