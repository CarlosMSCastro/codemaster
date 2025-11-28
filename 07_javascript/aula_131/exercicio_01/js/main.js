
var lista = ["maçã","uva","banana","ananás", "laranja"];

console.log("---- Vetor Original ----");
console.log(lista);

console.log("---- Adicionar 'clmentina' no vetor ----");
lista.push("Clementina");
console.log(lista);

console.log("---- Remover ultimo elemento ----");
lista.pop();
console.log(lista);

console.log("---- Remover o segundo elemento ----");
lista.splice(1, 1);
console.log(lista);

console.log("---- Adicionar 'manga' na primeira posiçao ----");
lista.splice(0, 0, "manga");
console.log(lista);

console.log("---- Existe banana ? ----");
console.log(lista.includes("banana"));