<?php

// Variaveis Globais
$ex_int = 12;
$ex_float = -3.56;
$ex_boolean = true;
$ex_str = "Codemaster";

const CONS_1 = 3;
define("CONS_2", 9);

// Executar

echo "<h1>Exemplo de inteiro: $ex_int</h1>";
echo "<h1>Exemplo de float: $ex_float</h1>";
echo "<h1>Exemplo de boolean: $ex_boolean</h1>";
echo "<h1>Exemplo de string: $ex_str</h1>";

echo"<hr>";

echo "<h1>Exemplo de constante 1: ".CONS_1."</h1>";
echo "<h1 style='color: purple;'>Exemplo de constante 2: ".CONS_2."</h1>";

?>