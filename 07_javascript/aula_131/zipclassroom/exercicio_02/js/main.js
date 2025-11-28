var frutas = ['maçã', 'uva', 'banana', 'ananás', 'laranja'];


console.log("--- Vetor original ---");
console.log(frutas);
console.log("\n\n\n");


console.log("--- Adicionar 'clementina' no vetor ---");
frutas.push("clementina");
console.log(frutas);
console.log("\n\n\n");


console.log("--- Remover último elemento ---");
frutas.pop();
console.log(frutas);
console.log("\n\n\n");


console.log("--- Remover o 2º elemento ---");
frutas.splice(1, 1);
console.log(frutas);
console.log("\n\n\n");

console.log("--- Adicionar 'manga' na 1º posição ---");
frutas.splice(0, 0, "manga");
console.log(frutas);
console.log("\n\n\n");

console.log("--- Existe 'banana' no vetor? ---");
console.log(frutas.includes("banana"));

// console.log(frutas.indexOf("banana"));