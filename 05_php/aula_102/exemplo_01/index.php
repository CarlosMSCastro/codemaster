<?php

$filmes = [
  "A Paixão de Cristo",
  "Homem de Aço",
  "Toy Story",
  "Toy Story 2",
  "Um Homem de Família",
  "Família do Futuro",
  "Família"
];

$termo = "homem";
$ids = [];

foreach($filmes as $i => $f){
  if(str_contains(strtolower($f), strtolower($termo))){
    $ids[] = $i;
  }
}


//foreach($filmes as $i => $f){
//  if(strtolower($f) == strtolower($termo)){
//    $ids[] = $i;
//  }
//}

print_r($ids);



?>