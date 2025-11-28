function enviar(event){
  
  event.preventDefault();

  let inicio = parseInt(inicio_input.value);
  let fim = parseInt(fim_input.value);

  // Crescente
  if(inicio <= fim){
    div_for_crescente(inicio, fim);
    div_while_crescente(inicio, fim)
  }
  // Decrescente
  else{
    div_for_decrescente(inicio, fim);
    div_while_decrescente(inicio, fim)
  }

}

function div_for_crescente(inicio, fim){
  for(let i=inicio; i<=fim; i++){
    saida_1.innerHTML += `<p>${i}</p>`;

    let p = document.createElement("p");
    p.innerHTML = i;
    saida_3.appendChild(p);
  }
}

function div_for_decrescente(inicio, fim){
  for(let i=inicio; i>=fim; i--){
    saida_1.innerHTML += `<p>${i}</p>`;

    let p = document.createElement("p");
    p.innerHTML = i;
    saida_3.appendChild(p);
  }
}

function div_while_crescente(inicio, fim){
  let loop = inicio;
  while(loop <= fim){
    saida_2.innerHTML += `<p>${loop}</p>`;

    let p = document.createElement("p");
    p.innerHTML = loop++;
    saida_4.appendChild(p);
  }
}

function div_while_decrescente(inicio, fim){
  let loop = inicio;
    while(loop >= fim){
    saida_2.innerHTML += `<p>${loop}</p>`;

    let p = document.createElement("p");
    p.innerHTML = loop--;
    saida_4.appendChild(p);
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