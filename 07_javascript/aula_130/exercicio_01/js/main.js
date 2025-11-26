function gerar(event){
  let inicio = numInicial.value;
  let fim = numFinal.value;
  event.preventDefault();

//------------------------------------------
  if(inicio <= fim){
    for (let i = inicio; i <= fim; i++){
      saida_1.innerHTML += i + "<br>";
    }
  }
  else{
    for (let i = inicio; i >= fim; i--){
      saida_1.innerHTML += i + "<br>";
    }
  }

//------------------------------------------
  if(inicio <= fim){
    let a = inicio
    while (a <= fim){
      saida_2.innerHTML += a + "<br>";
      a++;
    }
  }
  else{
    let a = inicio
    while (a >= fim){
      saida_2.innerHTML += a + "<br>";
      a--;
    }
  }

//------------------------------------------
  if (inicio <= fim) {
    for (let i = inicio; i <= fim; i++) {
      let p = document.createElement("p");
      p.innerHTML = i;
      saida_3.appendChild(p);
    }
  } else {
    for (let i = inicio; i >= fim; i--) {
      let p = document.createElement("p");
      p.innerHTML = i;
      saida_3.appendChild(p);
    }
  }

//------------------------------------------
  if (inicio <= fim) {
    let x = inicio;
    while (x <= fim) {
      let p = document.createElement("p");
      p.innerHTML = x;
      saida_4.appendChild(p);
      x++;
    }
  } else {
    let x = inicio;
    while (x >= fim) {
      let p = document.createElement("p");
      p.innerHTML = x;
      saida_4.appendChild(p);
      x--;
    }
  }


  caixa1.classList.remove("d-none");
  caixa2.classList.remove("d-none");
}





function limpar(){
  numInicial.value = "";
  numFinal.value = "";
  saida_1.innerHTML = '<span class="titulo">For</span><br>';
  saida_2.innerHTML = '<span class="titulo">While</span><br>';
  saida_3.innerHTML = '<span class="titulo">For + CreateElements</span><br>';
  saida_4.innerHTML = '<span class="titulo">While + CreateElements</span><br>';
  caixa1.classList.add("d-none");
  caixa2.classList.add("d-none");
}