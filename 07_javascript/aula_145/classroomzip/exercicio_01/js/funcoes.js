function registar(event){

  event.preventDefault();

  let nome = input_nome.value;
  let preco = parseFloat(input_preco.value);
  let stock = parseInt(input_stock.value);

  let np = new Produto(nome, preco, stock);
  produtos.push(np);

  np.gerar_tr();

  formulario.reset();
  input_nome.focus();

}