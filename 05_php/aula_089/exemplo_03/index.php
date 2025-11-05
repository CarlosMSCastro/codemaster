<?php

$form = !empty($_GET["cor"]);
if($form){
  $cor = $_GET["cor"];

}


?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 89</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Inputs</h1>
  
  <div class="caixa">
    <form action="">

      <label for="cor">Cor das roupas</label>
    <select name="cor" id="cor">
      <option value="branca" <?= isset($cor) && $cor=="branca" ? "selected" : "" ?>>Branca</option>
      <option value="preta"  <?= isset($cor) && $cor=="preta"  ? "selected" : "" ?>>Preta</option>
    </select>


      <br><br>

      <input type="submit" value="Enviar">

    </form>
  </div>


  <?php if ($form): ?>

    <?php if($cor == "branca"): ?>
      <div class="caixa">
        <h2>Roupas Brancas</h2>
        <img src="img/t-shirt.png" alt="T-Shirt">
        <img src="img/calca.png" alt="Calça">
        <img src="img/chapeu.png" alt="Chapeu">
      </div>

    <?php else: ?>

      <div class="caixa">
        <h2>Roupas Pretas</h2>
        <img src="img/t-shirt_preta.png" alt="T-Shirt">
        <img src="img/calca_preta.png" alt="Calça">
        <img src="img/chapeu_preto.png" alt="Chapeu">
      </div>

    <?php endif ?>

      <a href="index.php">
        <button>Reset</button>
      </a>

  <?php endif ?>

</body>
</html>