function enviar(event){
  event.preventDefault();

  let nome = nome_input.value;
  let altura = altura_input.value;
  let peso = peso_input.value;
  let imc = peso / altura **2;
  let estado = "";

  if(imc < 18.5){
    estado = "Peso Baixo";
  }
  else if(imc < 25){
    estado = "Normal";
  }
  else if(imc < 30){
    estado = "Excesso de Peso";
  }
  else if(imc < 35){
    estado = "Obesidade Classe 1";
  }
  else if(imc < 40){
    estado = "Obesidade Classe 2";
  }
  else{
    estado = "Obesidade Classe 3";
  }

  nome_saida.innerHTML = nome;
  imc_saida.innerHTML = imc.toFixed(2);
  estado_saida.innerHTML = estado;

  saida.classList.remove("d-none");
}
