<?php

$nasc = 1996;

echo "<h1>=== Cálculo da Idade === </h1>";
echo "<h2> Ano atual: ( " . date("Y") . " )</h2>";
echo "<h2> Ano de nascimento: ( " . $nasc . " )</h2>";
echo "<h2> Então, este ano completas: ( " . intval(date("Y")) - $nasc . " )</h2>";


?>