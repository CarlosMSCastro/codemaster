var ligado = true;
function alterar(){
  if(ligado){
    imagem.src = "img/bob_mini.jpg";
    ligado=false;
  }
  else{
    imagem.src = "img/bob.jpg";
    ligado=true;
  }
}

function alterar_melhorado(){
  if(ligado){
    imagem.src = "img/bob_mini.jpg";
  }
  else{
    imagem.src = "img/bob.jpg";
  }
  ligado = !ligado;
}

function alterar_2(){
  if(imagem.src == "http://localhost/codemaster/07_javascript/aula_125/exemplo_02/img/bob.jpg"){
    imagem.src = "img/bob_mini.jpg";
  }
  else{
    imagem.src = "img/bob.jpg";
  }
}

function alterar_3(){
  if(imagem.alt == "Bob"){
    imagem.src = "img/bob_mini.jpg";
    imagem.alt = "Bob Mini"
  }
  else{
    imagem.src = "img/bob.jpg";
    imagem.alt = "Bob"
  }
}

function alterar_4(){
  if(imagem.src.includes("mini")){
    imagem.src = "img/bob.jpg"
  }
  else{
    imagem.src = "img/bob_mini.jpg"
  }
}