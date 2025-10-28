<?php

require_once("funcoes.php");

$nome = $_GET["nome"] ?? null;
$foto = $_GET["foto"] ?? null;
$desc = $_GET["desc"] ?? null;
$perfant = intval($_GET["perfant"] ?? 0);
$perfpos = intval($_GET["perfpos"] ?? 0);
$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 93-Ex.3-Saída</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div>
    <a href="index.php">Voltar</a>
  </div>
  <div class="container">
    <?php
    for ($i = 1; $i <= $perfant; $i++) {
      $imgNum = rand(1, 16);
      echo '<div class="cartao">';
      echo '<div class="cartao-img"><img src="img/' . $imgNum . '.png" alt="Perfil Anterior ' . $i . '"></div>';
      echo '<div class="cartao-info">';
      echo '<h2>Perfil Anterior ' . $i . '</h2>';
      echo '<p>' . $lorem . '</p>';
      echo '</div>';
      echo '</div>';
      }
    ?>
  
    <div class="cartao" id="perfil-principal">
      <div class="cartao-img">
        <img src="<?= $foto ?>" alt="Foto de <?= $nome ?>">
      </div>
      <div class="cartao-info">
        <h2><?= $nome ?></h2>
        <p><?= $desc ?></p>
      </div>
    </div>

      <?php
        for ($i = 1; $i <= $perfpos; $i++) {
          $imgNum = rand(1, 16);
          echo '<div class="cartao">';
          echo '<div class="cartao-img"><img src="img/' . $imgNum . '.png" alt="Perfil Posterior ' . $i . '"></div>';
          echo '<div class="cartao-info">';
          echo '<h2>Perfil Posterior ' . $i . '</h2>';
          echo '<p>' . $lorem . '</p>';
          echo '</div>';
          echo '</div>';
    }
    ?>

  </div>

</body>
</html>