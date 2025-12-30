function posicionar(){
  
  let ce = window.innerWidth;
  let ae = window.innerHeight;
  let cimg = img.offsetWidth;
  let aimg = img.offsetHeight;

  //Horizontal
  x += vel_x;
  if(x >= ce-cimg){vel_x = -2;}
  else if(x <=0){vel_x = 2;}

    //Vertical
  y += vel_y;
  if(y >= ae-aimg){vel_y = -2;}
  else if(y <=0){vel_y = 2;}

  img.style.left = `${x}px`;
  img.style.top = `${y}px`;
  
  requestAnimationFrame(posicionar);
  
}
