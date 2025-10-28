<?php

$nome = $_GET["nome"];
$idade = $_GET["idade"];
$morada = $_GET["morada"];

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
  

<h1>Saída</h1>
<h2>--- Ficha do candidato ---</h2>
<h3>Nome: (<?= $nome ?>)</h3>
<h3>Idade: (<?= $idade ?>)</h3>
<h3>Morada: (<?= $morada ?>)</h3>
<a href="index.php">Voltar</a>

</body>
</html>