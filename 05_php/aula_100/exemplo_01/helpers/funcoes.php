<?php

function novo_servico($titulo, $imagem, $texto){
  $dicionario = [
    "titulo" => $titulo,
    "imagem" => $imagem,
    "texto" => $texto,
  ];
  return $dicionario;
}

function novo_produto($titulo, $imagem, $texto){
  $dicionario = [
    "titulo" => $titulo,
    "imagem" => $imagem,
    "texto" => $texto,
  ];
  return $dicionario;
}


?>