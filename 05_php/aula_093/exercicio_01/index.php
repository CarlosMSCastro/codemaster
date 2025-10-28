<?php

require_once("funcoes.php");

$peso = isset($_GET["peso"]) ? floatval($_GET["peso"]) : null;
$preco = isset($_GET["preco"]) ? floatval($_GET["preco"]) : null;
$resultado = null;
if ($peso !== null && $preco !== null) {
    $resultado = calcpreco($peso, $preco);
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 90-Ex.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Talho</h1>

  <div class="caixa">
    <form action="">
      <?php if ($resultado === null): ?>
        <input type="number" name ="peso" id="peso" placeholder="PESO" min="0" step="any"> 
        <input type="number" name ="preco" id="preco" placeholder="PREÇO/KG" min="0" step="any"> 
      <?php endif; ?>
      <a href="index.php">
        <input type="button" value="RESET">
      </a>
      <input type="submit" value="CALCULAR">
       
    </form>
    <?php if ($resultado !== null): ?>
      <p id="ppeso"><?= number_format($peso, 3) ?></p>
      <p id="ppreco"><?= number_format($preco, 2) ?></p>
      <p id="presultado"><?= number_format($resultado, 2) ?></p>
    <?php endif; ?>
  </div>

</body>
</html>