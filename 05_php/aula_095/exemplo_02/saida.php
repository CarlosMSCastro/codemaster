<?php

$form = !empty($_GET["nome"]) && !empty($_GET["morada"]) && !empty($_GET["empresa"]) && !empty($_GET["total"]);
if($form){
  $nome = $_GET["nome"];
  $morada = $_GET["morada"];
  $empresa = $_GET["empresa"];
  $total = $_GET["total"];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 095- Exemplo02</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Ficha de Candidatura</h1>

  <div class="caixa">
    <h4>Nome: (<?= $nome ?>)</h4>
    <h4>Morada: (<?= $morada ?>)</h4>
    <h4>Empresa: (<?= $empresa ?>)</h4>
    <h4>Nº de Colaboradores: (<?= $total ?>)</h4>
  </div>
</body>
</html>