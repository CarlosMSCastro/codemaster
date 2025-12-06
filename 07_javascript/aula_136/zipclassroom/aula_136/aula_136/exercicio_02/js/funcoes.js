var intervalo;
var loop = 1;

function teste(){
  intervalo = setInterval(escrever, 1000);
}

function escrever(){
  saida.innerHTML += "<p>Olá<p>";
  loop++;
  if(loop > 3){
    clearInterval(intervalo);
  }
}