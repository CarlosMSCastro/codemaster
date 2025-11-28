function mudar_todos(){
  let parag = document.querySelectorAll(".caixa p");
  for(let p of parag){
    p.classList.toggle("bgred");
  }
}

function mudar_special(){
  let p = document.querySelector("#special");
  p.classList.toggle("bgred");
}




//sem classe CSS
function mudar_todos_2(){
  let parag = document.querySelectorAll(".caixa p");
  for(let p of parag){
    if(p.style.backgroundColor == "red"){
      p.style.backgroundColor == "";
    }
    else{
      p.style.backgroundColor == "red"
    }    
  }
}