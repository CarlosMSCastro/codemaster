var frutas = ["maçã","uva","banana"];

console.log("--- Vetor Original ---");
console.log(frutas);


console.log("\n\n--- FOR ---");
for(let i=0; i<frutas.length; i++){
  console.log(frutas[i]);
}


console.log("\n\n--- FOR IN ---");
for(let i in frutas){
  let f = frutas[i];
  console.log(f);
}


console.log("\n\n--- FOR OF ---");
for(let f of frutas){
  console.log(f);
}

console.log("\n\n--- FOR EACH ---");
frutas.forEach((f)=>{console.log(f)});


console.log("\n\n--- WHILE ---");
let f = 0;
while(f < frutas.length){
  console.log(frutas[f]);
  f++;
}


