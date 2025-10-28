<?php


$x = -34;
echo abs($x) . "<br>" ;

$y = 12.50;
echo round($y, 2) . "<br>";

echo number_format($y, 2) . "<br>";

echo "<hr>";

$a = 6;
$b = 4;
$soma = $a + $b;
$sub = $a - $b;
$mult = $a * $b;
$div = $a / $b;

$resto = $a % $b;
$potencia = $a ** $b;
$potencia_2 = pow($a,$b);


echo $soma . "<br>";
echo $sub . "<br>";
echo $mult . "<br>";
echo $div . "<br>";
echo $resto . "<br>";
echo $potencia . "<br>";
echo $potencia_2 . "<br>";

echo "<hr>";

$c = 10;
$d = 3;
$e = $c / $d;    // 3.333333

echo round($e) . "<br>";
echo floor($e) . "<br>";
echo ceil($e) . "<br>";

echo "<hr>";

$teste = 3456.78;
echo number_format($teste, 2,","," ");



?>