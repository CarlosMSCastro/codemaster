var frutas = ['maçã', 'uva', 'banana'];

for(let i=0; i<frutas.length; i++){
  console.log(frutas[i]);
}

console.log("\n====================\n\n");

for(let i in frutas){
  let f = frutas[i];
  console.log(frutas[i]);
}

console.log("\n====================\n\n");

for(let f of frutas){
  console.log(f);
}

console.log("\n====================\n\n");
frutas.forEach((f) => {
  console.log(f)
});

console.log("\n====================\n\n");
var loop = 0;
while(loop < frutas.length){
  console.log(frutas[loop++]);
}