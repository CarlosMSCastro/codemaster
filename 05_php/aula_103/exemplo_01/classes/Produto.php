<?php


class Produto{
  
  //Atributos
  public $nome;
  public $preco;
  public $fornecedor;
  //Construtor
  public function __contruct($nome, $preco, $fornecedor){
    $this->nome = $nome;
    $this->preco = $preco;
    $this->fornecedor = $fornecedor;

  }
}


?>