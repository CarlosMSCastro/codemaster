<?php
require_once("funcoes.php");


get_dobro(5);
get_dobro(44);
get_dobro(32);

echo "<hr>";

calc_imc(101.4, 1.91);
calc_imc(56.5, 1.59);
calc_imc(78.2, 1.81);

echo "<hr>";

saudar_2("Carlos");
saudar_2("Rui");

echo "<hr>";

get_desconto(125);
get_desconto(25,33);
get_desconto(270);

echo "<hr>";

echo get_desconto_2(125) -50 . "<br>";
echo get_desconto_2(25,33) +15 . "<br>";
echo get_desconto_2(270) . "<br>";

?>