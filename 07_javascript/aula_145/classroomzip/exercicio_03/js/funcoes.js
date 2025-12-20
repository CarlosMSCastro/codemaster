function buscar(){

  let termo = (input_pesquisa.value).toLowerCase();

  let titulos = document.querySelectorAll(".card-title");

  if(termo.length > 0){
    
    for(let t of titulos){
      if((t.innerHTML).toLowerCase().includes(termo)){
        t.classList.add("active");
      }
      else{
        t.classList.remove("active");
      }
    }

  }
  else{
    for(let t of titulos){t.classList.remove("active");}
  }

}