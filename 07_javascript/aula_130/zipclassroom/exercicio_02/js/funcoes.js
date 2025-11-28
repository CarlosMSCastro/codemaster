function enviar(event){
  
  event.preventDefault();

  let inicio = parseInt(inicio_input.value);
  let fim = parseInt(fim_input.value);

  if(inicio <= fim){
    for(let i=inicio; i<=fim; i++){
      saida_1.innerHTML += `<p>${i}</p>`;
    }

    let loop = inicio;
    while(loop <= fim){
      saida_2.innerHTML += `<p>${loop++}</p>`;
    }

    for(let i=inicio; i<=fim; i++){
      let p = document.createElement("p");
      p.innerHTML = i;
      saida_3.appendChild(p);
    }

    loop = inicio;
    while(loop <= fim){
      let p = document.createElement("p");
      p.innerHTML = loop++;
      saida_4.appendChild(p);
    }
  }
  else{
    for(let i=inicio; i>=fim; i--){
      saida_1.innerHTML += `<p>${i}</p>`;
    }

    let loop = inicio;
    while(loop >= fim){
      saida_2.innerHTML += `<p>${loop--}</p>`;
    }

    for(let i=inicio; i>=fim; i--){
      let p = document.createElement("p");
      p.innerHTML = i;
      saida_3.appendChild(p);
    }

    loop = inicio;
    while(loop >= fim){
      let p = document.createElement("p");
      p.innerHTML = loop--;
      saida_4.appendChild(p);
    }
  }

}

function limpar(){
  saida_1.innerHTML = "";
  saida_2.innerHTML = "";
  saida_3.innerHTML = "";
  saida_4.innerHTML = "";
  inicio_input.value = "";
  fim_input.value = "";
}