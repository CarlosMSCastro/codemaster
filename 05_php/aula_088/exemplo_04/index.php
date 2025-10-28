<?php

$cor = "black";

$form = !empty($_GET["nome"]) && !empty($_GET["cor"]);
if($form){
  $nome = $_GET["nome"];
  $cor = $_GET["cor"];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 88.4</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body{background-color: <?= $cor ?>;}
  </style>

</head>
<body>

  <h1>Entrada</h1>

  <form action="" class="caixa">
    <h1>Formulário</h1>
    <br>
    <input type="text" name="nome" placeholder="Nome" required autofocus>
    <br><br>
    <label for="cor">Cor de Fundo:</label>
    <input type="color" name="cor" id="cor">
    <br><br>
    <input type="submit" value="Enviar">
  </form>

  <?php if($form): ?>

    <div class="caixa">
      <h2>Olá ( <?= $nome ?> ), vejo que escolhetes a cor ( <?= $cor ?> ).</h2>
    </div>

    <a href="index.php">
      <button>Voltar</button>
    </a>
  
  <?php endif ?>

</body>
</html>