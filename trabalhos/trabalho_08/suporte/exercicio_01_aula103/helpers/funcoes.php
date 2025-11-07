<?php



function pesquisar($termo){
  global $filmes;
  $ids = [];
  foreach($filmes as $i => $f){
    if(str_contains(strtolower($f->titulo), strtolower($termo))){
      $ids[] = $i;
    }
  }
  return $ids;
}

?>