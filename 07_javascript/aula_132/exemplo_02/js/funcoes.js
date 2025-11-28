
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
  for(let c of clientes){
    lista.innerHTML += `<li>${c.nome} - Idade ${c.idade} - Morada: ${c.morada}</li>`;
  }
}

function listar_2(){
  for(let c of clientes){
    tabela.innerHTML += `<tr><td>${c.nome}</td><td>${c.idade}</td><td>${c.morada}</td></tr>`;
  }
}

function listar_3(){
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