<?php

require_once "funcoes.php";

$peso = 0;
$preco = 0;
$resultado = 0;

$form = !empty($_GET["peso"]) && !empty($_GET["preco"]);
if($form){
  $peso = floatval($_GET["peso"]);
  $preco = floatval($_GET["preco"]);
  $resultado = calc_total($peso, $preco);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 93.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>TALHO</h1>

  <div class="caixa" id="balanca">
    <div id="peso"><?= number_format($peso, 3, ",") ?></div>
    <div id="preco"><?= number_format($preco, 2, ",") ?></div>
    <div id="resultado"><?= number_format($resultado, 2, ",") ?></div>
  </div>

  <form action="">
    <input type="number" name="peso" step="0.001" min="0.001" placeholder="Peso" required autofocus>
    <input type="number" name="preco" step="0.01" min="0.01" placeholder="Peso" required>
    <input type="submit" value="Calcular">
  </form>

</body>
</html>