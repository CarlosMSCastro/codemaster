class Floco{

  //atributos e construtor

  constructor(){
    this.x = get_aleatorio(0, window.innerWidth-25);
    this.y = get_aleatorio(-1000, -2000);
    this.vel_y = get_aleatorio(5, 25) / 10;
    this.comprimento = get_aleatorio(15, 50);

    this.img = document.createElement("img");
    this.img.classList.add("floco");
    this.img.src = "img/floco.png";
    document.body.appendChild(this.img);

    this.img.style.left = this.x + "px";
    this.img.style.width = this.comprimento + "px";
  }

  //Métodos
  atualizar(){
    this.y += this.vel_y;
    this.img.style.top = this.y + "px";

    if(this.y > window.innerHeight){
      this.resetar();
    }

    this.img.style.top = this.y + "px";
  }

  resetar(){
    this.x = get_aleatorio(0, window.innerWidth-25);
    this.y = -30;
    this.vel_y = get_aleatorio(5, 25) / 10;
    this.comprimento = get_aleatorio(15, 50);

    this.img.style.left = this.x + "px";
    this.img.style.width = this.comprimento + "px";
  }
}