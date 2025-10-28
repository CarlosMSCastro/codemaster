<?php

require_once("funcoes.php");

$inicio= null;
$fim= null;

$form = isset($_GET["inicio"],$_GET["fim"]);
if($form){
  $inicio = intval($_GET["inicio"]);
  $fim = intval($_GET["fim"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 93-Ex.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Lista Numérica</h1>

  <div class="caixa">
    <form action="">
      <h1>Formulário</h1>
      <input type="number" name="inicio" id="inicio" placeholder="Início" required autofocus value="<?= $inicio ?>">
      <input type="number" name="fim" id="fim" placeholder="Fim" value="<?= $fim ?>"><br>
      <input type="submit" value="Enviar"><br>
      <a href="index.php">
        <input type="button" value="Reset">
      </a>
    </form>
  </div>

  <?php if($form): ?>
    <div class="caixa">
      <h2>Resultado</h2>
      <div class="d-flex">
        <div class="esquerda">
          <h3>Resultado com <mark>FOR</mark></h3>
          <?php for($i = $inicio; $i <= $fim; $i++): ?>
            <p><?= $i ?></p>
          <?php endfor ?>
        </div>
        <div class="direita">
          <h3>Resultado com <mark>FOR</mark></h3>
          <?php $loop = $inicio; ?>
          <?php while ($loop <= $fim): ?>
            <p><?= $loop++ ?></p>
          <?php endwhile ?>
        </div>  
      </div>
    </div>
  <?php endif ?>
          
   <?php if($form): ?>
    <div class="caixa">
      <h2>Desafio</h2>
      <div class="d-flex">
        <div class="esquerda">
          <h3>Resultado com <mark>FOR</mark></h3>
          <?php for($i = $fim; $i >= $inicio; $i--): ?>
            <p><?= $i ?></p>
          <?php endfor ?>
        </div>
        <div class="direita">
          <h3>Resultado com <mark>FOR</mark></h3>
          <?php $loop = $fim; ?>
          <?php while ($loop >= $inicio): ?>
            <p><?= $loop-- ?></p>
          <?php endwhile ?>
        </div>  
      </div>
    </div>
  <?php endif ?>


</body>
</html>