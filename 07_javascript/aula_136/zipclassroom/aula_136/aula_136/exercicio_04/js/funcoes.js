var intervalo;
var loop;
var inicio;
var fim;

function enviar(event){
  event.preventDefault();
  saida.innerHTML = "";
  let info = {};
  let fd = new FormData(formulario);
  fd.forEach((valor, nome) => {info[nome] = valor});
  let tempo = parseFloat(info.tempo_input);
  inicio = parseInt(info.inicio_input);
  fim = parseInt(info.final_input);
  loop = inicio;
  intervalo = setInterval(escrever, tempo*1000);
}

function escrever(){
  saida.innerHTML += `<p>${loop++}</p>`;
  if(loop > fim){
    clearInterval(intervalo);
  }
}