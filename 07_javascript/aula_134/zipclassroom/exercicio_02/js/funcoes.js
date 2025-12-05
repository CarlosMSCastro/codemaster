function registar(event){

  event.preventDefault();

  let tr = document.createElement("tr");
  tr.classList.add("remover");

  let informacoes = {};
  let form_data = new FormData(formulario);
  form_data.forEach((value, name) => {
    informacoes[name] = value;

    let td = document.createElement("td");
    td.innerHTML = value;
    tr.appendChild(td);

  });
  
  tabela.appendChild(tr);

  formulario.reset();
  nome_input.focus();
  pessoas.push(informacoes);
  console.log(pessoas);

  // Para salvar nos Cookies com JSON
  localStorage.pessoas = JSON.stringify(pessoas);
  // localStorage.setItem("pessoas", JSON.stringify(pessoas));

}

function carregar_cookies(){

  pessoas = JSON.parse(localStorage.pessoas);

  for(let p of pessoas){
    let tr = document.createElement("tr");
    tr.classList.add("remover");

    for(let chave in p){
      let td = document.createElement("td");
      td.innerHTML = p[chave];
      tr.appendChild(td);
    }

    // let td1 = document.createElement("td");
    // td1.innerHTML = p.nome;
    // tr.appendChild(td1);

    // let td2 = document.createElement("td");
    // td2.innerHTML = p.idade;
    // tr.appendChild(td2);

    // let td3 = document.createElement("td");
    // td3.innerHTML = p.morada;
    // tr.appendChild(td3);

    // let td4 = document.createElement("td");
    // td4.innerHTML = p.nif;
    // tr.appendChild(td4);

    tabela.appendChild(tr);
  }

}

function limpar_cookies(){
  localStorage.clear();

  let remover = document.querySelectorAll("table tr.remover");
  console.log(remover);
  for(let r of remover){r.remove();}
}