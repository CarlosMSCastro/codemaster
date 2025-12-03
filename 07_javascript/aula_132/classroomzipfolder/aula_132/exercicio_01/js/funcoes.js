function mudar_especial(){
  especial.classList.toggle("active");
}

function mudar_todos(){
  let paragrafos = document.querySelectorAll("p");
  for(let p of paragrafos){
    p.classList.toggle("active");
  }
}