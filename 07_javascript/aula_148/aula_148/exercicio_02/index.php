<?php

date_default_timezone_set("Europe/Lisbon");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 147.2</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/funcoes.js" defer></script>
  <script src="js/main.js" defer></script>
</head>
<body>

  <h1>Javascript</h1>

  <div class="caixa">
    <h3>PHP</h3>
    <br>
    <h4><?= date("H:i:s") ?></h4>
  </div>

  <div class="caixa">
    <h3>Javascript 1</h3>
    <br>
    <h4 id="relogio_1"></h4>
  </div>

  <div class="caixa" id="relogio_2">
    <h3>Javascript 2</h3>
    <br>
    <div class="horas" id="h2"></div>
    <div class="minutos" id="m2"></div>
    <div class="segundos" id="s2"></div>
    <div class="milisegundos" id="ms2"></div>
  </div>

</body>
</html>