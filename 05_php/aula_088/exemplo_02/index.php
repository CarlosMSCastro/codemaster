<?php

$form = !empty($_GET["idade]"]);
if($form)
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
  
  <h1>Entrada</h1>

  <form action ="" class="caixa">
    <h1>Formulario</h1>
    <input type="number" name="idade" placeholder="Idade" required autofocus>
    <br><br>
    <input type="submit" value="Enviar">
  </form>

  <div class="caixa">
    <h2>Ainda não a carta de condução</h2>
  </div>

   <div class="caixa">
    <h2>Já Pode ter a carta de condução</h2>
  </div>

  
</body>
</html>