function registar(event){

  event.preventDefault();

  let tr = document.createElement("tr");

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

  // Salvar nos Cookies
  localStorage.pessoas = JSON.stringify(pessoas);

}

function carregar_cookies(){
  // Carregar Cookies Salvos
  pessoas = JSON.parse(localStorage.pessoas);

  // HTML
  for(let p of pessoas){
    let tr = document.createElement("tr");

    let td1 = document.createElement("td");
    td1.innerHTML = p.nome;
    tr.appendChild(td1);

    let td2 = document.createElement("td");
    td2.innerHTML = p.idade;
    tr.appendChild(td2);

    let td3 = document.createElement("td");
    td3.innerHTML = p.morada;
    tr.appendChild(td3);

    let td4 = document.createElement("td");
    td4.innerHTML = p.nif;
    tr.appendChild(td4);

    tabela.appendChild(tr);
  }
}