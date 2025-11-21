function enviar(event){
  event.preventDefault();
  let nome = nome_input_2.value;
  saida.innerHTML = `Bem-Vindo (${nome})`
}