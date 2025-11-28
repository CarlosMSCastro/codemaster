var frutas = ["maçã","uva","banana","ananás", "laranja"];
for(let i=0; i<frutas.length; i++){
  console.log((i+1) + " - " + frutas[i]);
}

console.log("\n====================\n\n");

for(let f of frutas){
  console.log(f);
}

console.log("\n====================\n\n");

for(let i in frutas){
  let f = frutas[i]
  console.log(parseInt(i)+1 + " - " + f);
}

console.log("\n====================\n\n");

frutas.forEach(function(f){console.log(f)});
frutas.forEach((f) => {console.log(f)});

