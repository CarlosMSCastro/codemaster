
function listar(){

  tabela.innerHTML = `
  <tr>
    <th>Nome</th>
    <th>Idade</th>
    <th>Morada</th>
  </tr>
  `;


  for(let c of clientes){
    let tr = document.createElement("tr");
    let td_1 = document.createElement("td");
    let td_2 = document.createElement("td");
    let td_3 = document.createElement("td");

    td_1.innerHTML = c.nome;
    td_2.innerHTML = c.idade;
    td_3.innerHTML = c.morada;

    tr.appendChild(td_1);
    tr.appendChild(td_2);
    tr.appendChild(td_3);

    tabela.appendChild(tr);
  }
}


function registar(event){

  event.preventDefault();


  let informacoes = {};
  let form_data = new FormData(formulario);
  form_data.forEach((value, name) => {informacoes[name] = value;})

  console.log(informacoes);
  clientes.push(informacoes);
  listar();

  formulario.nome.value = "";
  formulario.idade.value = "";
  formulario.morada.value = "";

  formulario.nome.focus();
}
