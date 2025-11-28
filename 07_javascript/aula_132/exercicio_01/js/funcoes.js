
//Pseudo-Construtor

function novo_cliente(nome, idade, morada){
  let dicionario = {
    nome: nome,
    idade: idade,
    morada: morada,
  };
  return dicionario;
}


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

  let form = document.querySelector("form");

  let nome = form.nome.value;
  let idade = form.idade.value;
  let morada = form.morada.value;

  clientes.push(novo_cliente(nome, idade, morada));
  console.log(clientes);
  listar();

  form.nome.value = "";
  form.idade.value = "";
  form.morada.value = "";

  form.nome.focus();
}
