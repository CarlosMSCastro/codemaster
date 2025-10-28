<?php

//pseudo-construtor
function novo_filme($titulo, $imagem, $banner, $desc){
  $dicionario = [
    "titulo" => $titulo,
    "imagem" => $imagem,
    "banner" => $banner,
    "desc" => $desc
  ];
  return $dicionario;
}

?>