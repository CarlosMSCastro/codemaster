<?php

$nome = $_GET["nome"];
$color = $_GET["color"];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo1-Aula87</title>
  <link rel="stylesheet" href="css/style.css">
  <style>body{background-color: <?= $color ?>;} </style>
</head>
<body>
  
<h1>Inputs</h1>
<div class="caixa">
  <h3>
    Olá ( <?= $nome ?> ), vejo que escolheste a cor ("<?=$color?>")
  </h3>
</div>
<a href="index.php"><button type="button">Voltar</button></a>



</body>
</html>