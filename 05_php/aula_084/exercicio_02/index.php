<?php

// Variaveis Globais
$a = round(M_PI, 6);
$b = 5;


// Executar

echo "<h2>Valor 1 = ($a)</h2>";
echo "<h2>Valor 2 = ($b)</h2>" . "<hr>";
echo "<h2>--- Testes com round() ---</h2>";
echo "<h2>round: (" . round($a) . " ) e (" . round($b) . ")</h2>";
echo "<h2>round com 1 casa decimal: (" . round($a, 1) . ") e (" . round($b, 1) . ")</h2>";
echo "<h2>round com 2 casa decimais: (" . round($a, 2) . ") e (" . round($b, 2) . ")</h2>";
echo "<h2>round com 3 casa decimais: (" . round($a, 3) . ") e (" . round($b, 3) . ")</h2>" . "<hr>";
echo "<h2>--- Testes com round() ---</h2>";
echo "<h2>number_format: (" . number_format($a) . ") e (" . number_format($b) . ")</h2>";
echo "<h2>number_format com 1 casa decimal: (" . number_format($a,1) . ") e (" . number_format($b,1) . ")</h2>";
echo "<h2>number_format com 2 casas decimais: (" . number_format($a,2) . ") e (" . number_format($b,2) . ")</h2>";
echo "<h2>number_format com 3 casas decimais: (" . number_format($a,3) . ") e (" . number_format($b,3) . ")</h2>";
echo "<h2>number_format com 3 casa decimais e virgula: (" . number_format($a,3,",","") . ") e (" . number_format($b,3,",","") . ")</h2>";

?>