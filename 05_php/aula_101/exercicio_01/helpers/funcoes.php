<?php

//pseudo-construtor
function novo_filme($titulo, $imagem, $texto,$banner){
  $dicionario = [
    "titulo" => $titulo,
    "imagem" => $imagem,
    "texto" => $texto,
    "banner" => $banner,
  ];
  return $dicionario;
}

?>