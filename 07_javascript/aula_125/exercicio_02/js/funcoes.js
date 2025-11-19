function on_and_off(){
  if(on.alt == "on"){
    on.src = "img/off.png";
    on.alt = "off"
    desligado.src = "img/ligado.png"
    desligado.alt = "ligado"
    document.body.style.backgroundColor = "#cfc100ff"
    document.body.style.color = "#2e2e2eff"
  }
  else{
    on.src = "img/on.png";
    on.alt = "on"
    desligado.src = "img/desligado.png"
    desligado.alt = "desligado"
    document.body.style.backgroundColor = "#2e2e2eff"
    document.body.style.color = "#cfc100ff"
  }
}

