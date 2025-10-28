<?php

require_once("funcoes.php");

$raio = $_GET["raio"] ?? null;

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
  <h1>Calculo do comprimento da circunferencia</h1>

  <div class="caixa">
    <form action="">
      <input type="number" min ="0" placeholder="RAIO" id="raio" name="raio" step="any" >
      <input type="submit" value="CALCULAR!"><br>
      <a href="index.php">
        <input type="button" value="RESET">
      </a>
    </form>
  </div>
  <br><br>    
    <?php if (isset($raio)): ?>
      <div class="caixa">
        <p id="r"><?= number_format($raio,2) ?></p>
        <p id="comp"><?= number_format(comprimento_circunferencia($raio), 2) ?></p>
      </div>   
    <?php endif; ?>

</body>
</html>