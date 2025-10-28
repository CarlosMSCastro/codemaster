<?php

$c = number_format(16,2);
$f = number_format(($c * 1.8) + 32,2);
$k = number_format($c + 273.15,2);

echo "<h1>=== Conversor de Temperatura PHP === </h1>";
echo "<h2>Celsius = (" . $c . "ºC)</h2><hr>";
echo "<h2>( " . $c ."ºC ) = (" . $f . " F )</h2>";
echo "<h2>( " . $c ."ºC ) = (" . $k . " K )</h2>";

?>