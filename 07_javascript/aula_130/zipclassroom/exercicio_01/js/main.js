for(let i=1; i<=5; i++){
  saida_1.innerHTML += "<h3>Subtítulo!</h3>";
}

for(let i=1; i<=5; i++){
  let h3 = document.createElement("h3");
  h3.innerHTML = "Subtítulo!";
  saida_2.appendChild(h3);
}