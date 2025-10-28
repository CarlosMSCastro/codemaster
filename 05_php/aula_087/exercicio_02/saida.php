<?php

$c = number_format($_GET["celsius"],2);
$f = number_format(($c * 1.8) + 32,2);
$k = number_format($c + 273.15,2);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo1-Aula87</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<h1>Conversor de Temperaturas <br>2.0</h1>
<div class="caixa">
  <h3>Celsius = ( <?= $c ?> ºC )</h3>
  <h3>Fahrenheit = ( <?= $f ?> F )</h3>
  <h3>Kelvin = ( <?= $k ?> ºK )</h3>
</div>
<a href="index.php"><button type="button">Voltar</button></a>



</body>
</html>