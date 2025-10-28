<?php

// Variaveis Globais
$ex_int = 12;
$ex_float = -3.56;
$ex_boolean = true;
$ex_str = "Codemaster";

const CONS_1 = 3;
define("CONS_2", 9);

// Executar

echo "<h1>Análise com o var_dump()</h1>";
var_dump($ex_int);
echo"<br>";
var_dump($ex_float);
echo"<br>";
var_dump($ex_boolean);
echo"<br>";
var_dump($ex_str);
echo"<br>";
var_dump(CONS_1);
echo"<br>";
var_dump(CONS_2);
echo"<br>";


echo "<h1>Análise com o print_r()</h1>";
print_r($ex_int);
echo"<br>";
print_r($ex_float);
echo"<br>";
print_r($ex_boolean);
echo"<br>";
print_r($ex_str);
echo"<br>";
print_r(CONS_1);
echo"<br>";
print_r(CONS_2);
echo"<br>";
?>