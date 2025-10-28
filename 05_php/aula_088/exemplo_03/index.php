<?php

$form = !empty($_GET["nome"]) && !empty($_GET["idade"]);
if($form){
  $nome = $_GET["nome"];
  $idade = $_GET["idade"];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 88.4</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Entrada</h1>

  <form action="" class="caixa">
    <h1>Formulário</h1>
    <br>
    <input type="text" name="nome" placeholder="Nome" required autofocus>
    <br><br>
    <input type="number" name="idade" placeholder="Idade" required>
    <br><br>
    <input type="submit" value="Enviar">
  </form>

  <?php if($form): ?>

    <div class="caixa">
      <h2>Bem-vindo <?= $nome ?></h2>
      <h2>Idade: <?= $idade ?></h2>
    </div>

  <?php endif ?>

  <a href="index.php">
    <button>Voltar</button>
  </a>
  
</body>
</html>