<?php

$form = !empty($_GET["idade"]);
if($form){
  $idade = intval($_GET["idade"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 88.6</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Entrada</h1>

  <form action="" class="caixa">
    <h1>Formulário</h1>
    <br>
    <input type="number" name="idade" placeholder="Idade" required autofocus>
    <br><br>
    <input type="submit" value="Enviar">
  </form>

  <?php if($form): ?>



    
    <?php if($idade < 16): ?>

      <div class="caixa">
        <h2>NÃO pode ter a carta de condução</h2>
      </div>

    <?php elseif($idade < 18): ?>

      <div class="caixa">
        <h2>JÁ podes conduzir motas</h2>
      </div>

    <?php else: ?>

      <div class="caixa">
        <h2>JÁ podes conduzir tudo</h2>
      </div>

    <?php endif ?>



  <?php endif ?>

</body>
</html>