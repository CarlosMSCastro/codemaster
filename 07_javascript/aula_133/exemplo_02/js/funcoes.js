

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
  })

  tabela.appendChild(tr);

  formulario.reset();
  nome_input.focus();
  pessoas.push(informacoes);
  console.log(pessoas);


}
