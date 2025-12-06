var loop;
var inicio;
var fim;

function enviar(event){
  
  event.preventDefault();

  saida.innerHTML = "";

  let info = {};
  let fd = new FormData(formulario);
  fd.forEach((valor, nome) => {info[nome] = valor});

  inicio = parseInt(info.inicio_input);
  fim = parseInt(info.final_input);
  let tempo = parseFloat(info.tempo_input);
  let total_loops = fim - inicio + 1;

  loop = inicio;

  for(let i=1; i<=total_loops; i++){
    setTimeout(escrever, tempo*1000*i);
  }

}

function escrever(){
  saida.innerHTML += `<p>${loop++}</p>`;
  if(loop > fim){
    setTimeout(alerta_fim, 500);
  }
}

function alerta_fim(){
  alert("FIM!");
  formulario.reset();
  inicio_input.focus();
}