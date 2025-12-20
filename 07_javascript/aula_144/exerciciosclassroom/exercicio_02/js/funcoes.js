function addP(){
  
  let r = get_aleatorio(0, 255);
  let g = get_aleatorio(0, 255);
  let b = get_aleatorio(0, 255);
  let rgb = `rgb(${r}, ${g}, ${b})`;

  let novo_p = document.createElement("p");
  novo_p.innerHTML = rgb;
  novo_p.style.backgroundColor = rgb;
  saida.appendChild(novo_p);

  loop++;
  if(loop >= 10){clearInterval(intervalo);}
  
}

function get_aleatorio(min, max){
  return Math.floor( Math.random() *  (max - min + 1) + min );
}