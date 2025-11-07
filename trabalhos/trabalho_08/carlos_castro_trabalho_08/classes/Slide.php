<?php

class Slide{
  public $imagem;
  public $titulo;
  public $texto;

  public function __construct($imagem, $titulo, $texto){
    $this->imagem = $imagem;
    $this->titulo = $titulo;
    $this->texto = $texto;
  }
}


?>