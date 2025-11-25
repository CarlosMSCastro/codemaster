function converter(){
  let valor = parseInt(valor_input.value);
  let moeda = moeda_input.value;

  if(!isNaN(valor)){
    if(moeda == "dolar"){
      let valorDolar = valor * 1.03;
      saida.innerHTML = `${valor} € <=> ${valorDolar.toFixed(2)} $`;
    }
    else if(moeda == "libra"){
      let valorLibra = valor * 0.84;
      saida.innerHTML = `${valor} € <=> ${valorLibra.toFixed(2)} £`;
    }
    else if(moeda == "real"){
      let valorReal = valor * 6.19;
      saida.innerHTML = `${valor} € <=> ${valorReal.toFixed(2)} R$`;
    }
    else if(moeda == "yen"){
      let valorYen = valor * 161.15;
      saida.innerHTML = `${valor} € <=> ${valorYen.toFixed(2)} ¥`;
    }
  }
  else{
    saida.innerHTML = "";
  }
}


