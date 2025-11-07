<?php



function pesquisar($termo){
  global $viagens;
  $ids = [];
  foreach($viagens as $i => $v){
    if(str_contains(strtolower($v->nome), strtolower($termo))){
      $ids[] = $i;
    }
  }
  return $ids;
}

?>