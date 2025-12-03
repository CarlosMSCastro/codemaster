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

  // let td1 = document.createElement("td");
  // td1.innerHTML = informacoes.nome;

  // let td2 = document.createElement("td");
  // td2.innerHTML = informacoes.idade;

  // let td3 = document.createElement("td");
  // td3.innerHTML = informacoes.morada;

  // tr.appendChild(td1);
  // tr.appendChild(td2);
  // tr.appendChild(td3);
  
  tabela.appendChild(tr);

  formulario.reset();
  nome_input.focus();
  pessoas.push(informacoes);
  console.log(pessoas);

}