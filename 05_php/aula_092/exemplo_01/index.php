<?php
require_once("funcoes.php");


$temp = $_GET["temp"]?? null;

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 90-Ex.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Conversor de Temperaturas</h1>

  <div class="caixa">
    <form action="">
      <input type="number" placeholder="Celsius" id="temp" name="temp" step="any" >
      <input type="submit" value="CALCULAR!"><br>
      <a href="index.php">
        <input type="button" value="RESET">
      </a>
    </form>
  </div>
  <br><br>
  <div class="caixa">   
    <?php
    if (!empty($temp)) {
      converter($temp);
    
      switch (true) {
        case $temp < 0:
          $imagem = "gelo.jpg";
          break;
        case $temp >= 0 && $temp <= 100:
          $imagem = "agua.jpg";
          break;
        case $temp > 100:
          $imagem = "vapor.jpg";
          break;
      }
      echo "<img src='img/$imagem' alt='Temperatura'>";
    }
    ?>

  </div>

</body>
</html>