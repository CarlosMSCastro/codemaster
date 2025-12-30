function atualizar_relogio_1(){
  let data_atual = new Date();
  let h = (data_atual.getHours() < 10) ? "0"+data_atual.getHours() : data_atual.getHours();
  let m = (data_atual.getMinutes() < 10) ? "0"+data_atual.getMinutes() : data_atual.getMinutes();
  let s = (data_atual.getSeconds() < 10) ? "0"+data_atual.getSeconds() : data_atual.getSeconds();
  let ms = data_atual.getMilliseconds();
  relogio_1.innerHTML = `${h}:${m}:${s}.${ms}`;
}

function atualizar_relogio_2(){
  let data_atual = new Date();
  let h = data_atual.getHours();
  let m = data_atual.getMinutes();
  let s = data_atual.getSeconds();
  let ms = data_atual.getMilliseconds();

  h2.style.width = `${h * 100/23}%`;
  m2.style.width = `${m * 100/59}%`;
  s2.style.width = `${s * 100/59}%`;
  ms2.style.width = `${ms * 100/999}%`;
}