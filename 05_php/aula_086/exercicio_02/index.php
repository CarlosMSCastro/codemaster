<?php

$nome = "Carlos Castro";
$texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quos quae reiciendis tempora facilis eveniet repellendus? Non explicabo labore quia voluptates maxime.";
$imagem = 'src="img/neve.png" alt="Imagem"';

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 86.02</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="banner">
    <div class="imagem">
      <img <?= $imagem ?>>
    </div>
    <div class="texto">
      <p id="nome"><?= $nome ?></p>
      <p><?= $texto ?></p>
    </div>
  </div>
</body>
</html>