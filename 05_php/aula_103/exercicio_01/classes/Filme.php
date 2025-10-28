<?php

class Filme{
  public $titulo;
  public $imagem;
  public $banner;
  public $desc;

  public function __construct($titulo, $imagem, $banner, $desc){
    $this->titulo = $titulo;
    $this->imagem = $imagem;
    $this->banner = $banner;
    $this->desc = $desc;
  }
}


?>