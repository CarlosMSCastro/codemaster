function get_aleatorio(min, max){
  return Math.floor( Math.random() *  (max - min + 1) + min );
}


function posicionar(){
  let x = get_aleatorio(0, window.innerWidth-img.offsetWidth);
  let y = get_aleatorio(0, window.innerHeight-img.offsetHeight);

  img.style.left = `${x}px`;
  img.style.top = `${y}px`;

  console.log(`${x} | ${y}`);
}