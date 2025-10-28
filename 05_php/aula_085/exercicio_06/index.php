<?php

echo "<h1>=== INÍCIO === </h1>";
echo "<h2>Qual a sua idade?</h2>";
$temp = 12;

if($temp <=18){
  echo "<h2 style='color: blue;'>Vestir roupas grossas e casaco.</h2>";
}
elseif($temp >=28){
  echo "<h2 style='color: orange;'>Ir á praia</h2>";
}
else{
  echo "<h2>Vestir Roupas normais.</h2>";
}


echo "<h2>Está a chover?</h2>";
$resp = "nao";
if($resp == "sim"){
  echo "<h2 style='color: blue;'>Levar guarda-chuva.</h2>";
}

echo "<h2>Ir passear.</h2>";
echo "<h1>=== FIM ===</h1>";


?>