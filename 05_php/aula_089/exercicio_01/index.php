<?php

$cor = "";
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
<body style="background-color: <?= $cor ?>;">

  <h1>Inputs</h1>
  
  <div class="caixa">
    <form action="">
      <h3 for="cor">Cor das roupas</h3>
      <br>
      <label for="branca">Branca:</label>
      <input type="radio" name="cor" value="branca" id="branca"<?= ($cor == "branca") ? "checked" : "" ?>><br>
      <label for="preta">Preta:</label>
      <input type="radio" name="cor" value="preta" id="preta"<?= ($cor == "preta") ? "checked" : "" ?>><br>
      <label for="vermelha">Vermelha:</label>
      <input type="radio" name="cor" value="vermelha" id="vermelha"<?= ($cor == "vermelha") ? "checked" : "" ?>><br>
      <label for="verde">Verde:</label>
      <input type="radio" name="cor" value="verde" id="verde"<?= ($cor == "verde") ? "checked" : "" ?>><br><br>
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

    <?php elseif($cor == "preta"): ?>

      <div class="caixa">
        <h2>Roupas Pretas</h2>
        <img src="img/t-shirt_preta.png" alt="T-Shirt">
        <img src="img/calca_preta.png" alt="Calça">
        <img src="img/chapeu_preto.png" alt="Chapeu">
      </div>

    <?php elseif($cor == "vermelha"): ?>

      <div class="caixa">
        <h2>Roupas Vermelhas</h2>
        <img src="img/t-shirt_vermelha.png" alt="T-Shirt">
        <img src="img/calca_vermelha.png" alt="Calça">
        <img src="img/chapeu_vermelho.png" alt="Chapeu">
      </div>
    
    <?php else: ?>
        <div class="caixa">
        <h2>Roupas Verdes</h2>
        <img src="img/t-shirt_verde.png" alt="T-Shirt">
        <img src="img/calca_verde.png" alt="Calça">
        <img src="img/chapeu_verde.png" alt="Chapeu">
      </div>
      
    <?php endif ?>

      <a href="index.php">
        <button>Reset</button>
      </a>

  <?php endif ?>

</body>
</html>