var vetor = ["Ronaldo", "Messi", "Neymar"];

var matriz = [
  ["Ronaldo", "Messi", "Neymar"],
  ["Hazard", "Pogba", "Benzema"],
  ["Bale", "Cherki", "Haaland"]
];

var dicionario = {
  "nome": "Carlos",
  "apelido": "Castro",
  "morada": "Famalicão",
  "idade": 30
};

var dicionario_js = {
  nome: "Carlos",
  apelido: "Castro",
  morada: "Famalicão",
  idade: 28
};

var clientes = [
  novo_cliente("Carlos", 28, "Famalicão"),
  novo_cliente("Ana", 28, "Braga"),
  novo_cliente("Jorge", 28, "Trofa"),
  novo_cliente("Karol", 26, "Porto"),
  novo_cliente("Jorge", 26, "Guimarães"),
];

for(let c of clientes){
  console.log(`${c.nome} - (idade: ${c.idade}) (Morada: ${c.morada}).`);
}

//Pseudo-Construtor

function novo_cliente(nome, idade, morada){
  let dicionario = {
    nome: nome,
    idade: idade,
    morada: morada,
  };
  return dicionario;
}