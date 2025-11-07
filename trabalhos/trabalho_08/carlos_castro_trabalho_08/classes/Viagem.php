<?php

class Viagem{
  public $nome;
  public $imagem;
  public $descricao;

  public function __construct($nome, $imagem, $descricao){
    $this->nome = $nome;
    $this->imagem = $imagem;
    $this->descricao = $descricao;
  }
}


?>