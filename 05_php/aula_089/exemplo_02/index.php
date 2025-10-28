<?php

$cor = "branca";

if($cor =="branca"){
  echo "Roupas Brancas";
}
else{
  echo "Roupas Pretas";
}

echo "<hr>";

echo ($cor == "branca") ? "Roupas Brancas" : "Roupas Pretas";

echo "<hr>";

$idade = 55;
if($idade < 18){
  $resposta = "NAO PODE CONDUZIR";
}
else{
  $resposta = "JÁ PODE CONDUZIR";
}
echo $resposta;

echo "<hr>";

$resposta = ($idade <18) ? "NÃO PODE DIRIGIR" : "JÁ PODE DIRIGIR";
echo $resposta;


?>
