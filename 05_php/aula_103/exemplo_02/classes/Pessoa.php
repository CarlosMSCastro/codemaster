<?php

class Pessoa {

  // Atributos
  public $nome;
  public $peso;
  public $altura;
  public $idade;

  // Construtor
  public function __construct($nome, $peso, $altura, $idade) {
    $this->nome = $nome;
    $this->peso = $peso;
    $this->altura = $altura;
    $this->idade = $idade;
  }

  // Métodos
  public function completar_anos() {
    $this->idade++;
  }

  public function get_imc() {
    return $this->peso / ($this->altura ** 2);
  }
}

?>
