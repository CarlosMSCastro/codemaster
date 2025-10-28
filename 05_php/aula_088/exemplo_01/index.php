<?php

$form = !empty($_GET["nome"]) && !empty($_GET["color"]);
if($form){
  $nome = $_GET["nome"];
  $color = $_GET["color"];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo1-Aula88</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: <?= $color ?>;">
  
  <h1>Inputs</h1>

  <form action ="" class="caixa">
    <input type="text" name="nome" placeholder="Nome" required autofocus>
    <br><br>
    <p style="display:inline;" id="label">Cor de Fundo:</p>
    <input type="color" name="color" value="#000000">
    <br><br>
    <input type="submit" value="Enviar">
  </form>


  <?php if($form): ?>

    <div class="caixa">
      <h2>Olá (<?= $nome ?>), vejo que escolheste a cor (<?= $color ?>)</h2>
    </div>
    <a href="index.php">
    <button>Reset</button>
  </a>

  <?php endif ?>

</body>
</html>