
function get_aleatorio(min, max){
  return Math.floor( Math.random() * (max - min + 1) + min);
}

function posicionar(){
  for(let f of flocos){
    f.atualizar();
  }

  requestAnimationFrame(posicionar);
}