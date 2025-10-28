<?php

class Cliente{
  //Atributos
  public $nome;
  private $morada;
  private $cartao;

  //Construtor
  public function __construct($nome, $morada, $cartao){
    $this->nome = $nome;
    $this->morada = $morada;
    $this->cartao = $cartao;
  }
  
  //Métodos            Nome pode ser qualquer?
  public function get_cartao(){
    return "****".substr($this->cartao,5, 4);
  }
   public function get_morada(){
    return "****".substr($this->morada,4, 4);
  }
  public function set_morada($nova_morada){
    $this->morada = $nova_morada;
  }
}






?>