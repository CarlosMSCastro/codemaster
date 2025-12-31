function get_aleatorio(min, max){
  return Math.floor( Math.random() * (max - min + 1) + min);
}

function posicionar(){
  
  let ce = window.innerWidth;
  let ae = window.innerHeight;
  let cimg = img.offsetWidth;
  let aimg = img.offsetHeight;

  //Horizontal
  x += vel_x;
  if(x >= ce-cimg){
    vel_x = -2;
    mudar_body();}
  else if(x <=0){
    vel_x = 2;
    mudar_body();
  }

    //Vertical
  y += vel_y;
  if(y >= ae-aimg){
    vel_y = -2;
    mudar_body();
  }
  else if(y <=0){
    vel_y = 2;
    mudar_body();
  }

  img.style.left = `${x}px`;
  img.style.top = `${y}px`;
  
  requestAnimationFrame(posicionar);  
}

function mudar_body(){
  let r = get_aleatorio(0,255);
  let g = get_aleatorio(0,255);
  let b = get_aleatorio(0,255);
  let rgb = `rgb(${r}, ${g}, ${b})`;
  document.body.style.backgroundColor = rgb;
}
