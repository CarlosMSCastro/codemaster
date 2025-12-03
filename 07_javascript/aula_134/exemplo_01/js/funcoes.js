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

  // Salvar nos Cookies
  localStorage.pessoas = JSON.stringify(pessoas);

}

function carregar_cookies(){
  // Carregar Cookies Salvos
  pessoas = JSON.parse(localStorage.pessoas);

  // HTML
  for(let p of pessoas){
    let tr = document.createElement("tr");
    tr.classList.add("remover");

      for(let chave in p){
        let td = document.createElement("td");
        td.innerHTML = p[chave];
        tr.appendChild(td);
      }

    tabela.appendChild(tr);
  }
}

function reset_cookies() {
  localStorage.clear();
  let remover = document.querySelectorAll("table tr.remover");
  for(let r of remover){r.remove();}

  
}