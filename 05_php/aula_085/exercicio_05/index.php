<?php

echo "<h1>=== INÍCIO === </h1>";
echo "<h2>Qual a sua idade?</h2>";

$idade = 17;

if($idade <18){
  echo "<h2 style='color: red;'>Você ainda não tem idade para tirar a carta de condução.</h2>";
}

else{
  echo "<h2 style='color: green;'>Você já pode tirar a carta de condução.</h2>";
}

echo "<h1>=== FIM ===</h1>";


?>