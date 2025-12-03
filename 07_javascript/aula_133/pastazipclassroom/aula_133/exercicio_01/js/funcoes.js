function nova_pessoa(nome, idade, morada){  
  let dicionario = {
    nome: nome,
    idade: idade,
    morada: morada,
  };
  return dicionario;
}

function registar(event){

  event.preventDefault();

  let nome = nome_input.value;
  let idade = idade_input.value;
  let morada = morada_input.value;
  let np = nova_pessoa(nome, idade, morada);

  let tr = document.createElement("tr");

  let td1 = document.createElement("td");
  td1.innerHTML = nome;

  let td2 = document.createElement("td");
  td2.innerHTML = idade;

  let td3 = document.createElement("td");
  td3.innerHTML = morada;

  tr.appendChild(td1);
  tr.appendChild(td2);
  tr.appendChild(td3);
  
  tabela.appendChild(tr);

  formulario.reset();
  nome_input.focus();
  pessoas.push(np);
  console.log(pessoas);

}