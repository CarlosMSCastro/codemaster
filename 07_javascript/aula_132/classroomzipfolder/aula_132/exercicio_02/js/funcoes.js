var vetor = ["morango", "uva", "laranja"];

var matriz = [
  ["morango", "uva", "laranja"],
  ["clementina", "banana", "melão"],
  ["lima", "limão", "goiaba"]
];

var dicionario = {
  "nome": "fabricio",
  "apelido": "vidal",
  "morada": "covilha",
  "idade": 30
};

var dicionario_2 = {
  nome: "fabricio",
  apelido: "vidal",
  morada: "covilha",
  idade: 30
};

// var clientes = [
//   {nome: "Fabrício", idade: 30, morada: "Covilhã"},
//   {nome: "Ana", idade: 55, morada: "Lisboa"},
//   {nome: "José", idade: 14, morada: "Amadora"},
//   {nome: "João", idade: 76, morada: "Almada"},
//   {nome: "Marta", idade: 43, morada: "Porto"},
// ];

var clientes = [
  novo_cliente("Fabrício", 30, "Covilhã"),
  novo_cliente("Ana", 55, "Lisboa"),
  novo_cliente("José", 14, "Amadora"),
  novo_cliente("João", 76, "Alamda"),
  novo_cliente("Marta", 43, "Porto"),
];

for(let c of clientes){
  console.log(`${c.nome} - (Idade: ${c.idade}) [Morada: ${c.morada}]`);
}

// Pseudo-construtor
function novo_cliente(nome, idade, morada){
  let dicionario = {
    nome: nome,
    idade: idade,
    morada: morada,
  };
  return dicionario;
}