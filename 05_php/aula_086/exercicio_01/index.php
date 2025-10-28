<?php

$nome = "Carlos Castro";
$idade = 60;


echo "<h1>=== Verificador de Idade === </h1>";
echo "<h2>Nome : (" . $nome . ")</h2>";
echo "<h2>Idade : (" . $idade . ")</h2><hr>";

if ($idade <= 11){
  $categoria = "CRIANÇA";
}
elseif ($idade <  18){
  $categoria = "ADOLESCENTE";
}
elseif ($idade <  33){
  $categoria = "JOVEM ADULTO";
}
elseif ($idade <  60){
  $categoria = "ADULTO";
}
else{
  $categoria = "IDOSO";
}

echo "<p style='font-size:20px';><marquee scrollamount='15'>O <b>" . $nome . "</b> tem <b>" . $idade . "</b> anos de idade, logo é um <b>$categoria.</b></marquee>";

?>