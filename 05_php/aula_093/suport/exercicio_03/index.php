<?php

$form = !empty($_GET["total"]);
if($form){
  $total = intval($_GET["total"]);
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

  <form action="">
    <input type="number" name="total" min="1" placeholder="Total de Loops" required autofocus>
    <input type="submit" value="Calcular">
  </form>

  <?php if($form): ?>

    <br>

    <a href="index.php">
      <button>Reset</button>
    </a>

    <br><br>







    <?php $loop = 1; ?>
    <?php while($loop <= $total): ?>

      <hr>
      <div class="caixa">
        <h1><?= $loop++ ?></h1>
      </div>

    <?php endwhile ?>








    <?php for($i=1; $i <= $total; $i++): ?>

      <hr>
      <div class="caixa">
        <h1 style="color: red;"><?= $i ?></h1>
      </div>

    <?php endfor ?>





    

  <?php endif ?>

</body>
</html>