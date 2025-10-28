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

function pesquisar($termo){
  global $filmes;
  $ids = [];
  foreach($filmes as $i => $f){
    if(str_contains(strtolower($f["titulo"]), strtolower($termo))){
      $ids[] = $i;
    }
  }
  return $ids;
}

?>