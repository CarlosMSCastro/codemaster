function procurar(){
  let termo = document.querySelector('#nome').value.toLowerCase();
  
  let cards = document.querySelectorAll(".card");
  
  if(termo.length > 0) {
    for(let c of cards) {
      let h3 = c.querySelector("h3").innerHTML.toLowerCase();
      
      if(h3.includes(termo)) {
        c.classList.remove("d-none");
      } else {
        c.classList.add("d-none");
      }
    }
  } else {
    for(let c of cards) {
      c.classList.remove("d-none");
    }
  }
}