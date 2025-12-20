class Produto{

  // Atributos e Construtor
  constructor(nome, preco, stock){
    this.nome = nome;
    this.preco = preco;
    this.stock = stock;
  }

  // Métodos
  gerar_tr(){
    let tr = document.createElement("tr");
    let td_nome = document.createElement("td");
    let td_preco = document.createElement("td");
    let td_stock = document.createElement("td");

    td_nome.innerHTML = this.nome;
    td_preco.innerHTML = this.preco;
    td_stock.innerHTML = this.stock;

    tr.appendChild(td_nome);
    tr.appendChild(td_preco);
    tr.appendChild(td_stock);

    tabela.appendChild(tr);

    this.exibir_ficha();
  }

  exibir_ficha(){
    console.log(`${this.nome} - (Preço: ${this.preco.toFixed(2)} €) [Stock: ${this.stock}]`);
  }

}