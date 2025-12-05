function alerta(){
  let texto = id_texto.value;
  alert(`${texto}`);
}

function abrir_alerta(){
  let tempo = id_tempo.value;
  setTimeout(alerta, tempo*1000);
}