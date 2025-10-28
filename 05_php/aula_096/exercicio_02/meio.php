<?php
$numrecibos = 0;
$form = !empty($_GET["numrecibos"]);
if($form){
  $numrecibos = intval($_GET["numrecibos"]);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 096 Exercicio 01</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h2>Meio</h2>

  <div class="caixa">
    <form action="saida.php">     
      <input type="hidden" name="numrecibos" value="<?=$numrecibos?>">
      
        <?php for($i = 1; $i <= $numrecibos; $i++): ?>
          <br>
          <label for="recibo<?= $i ?>">Recibo <?= $i ?>:</label>
          <input type="number" step="any" id="recibo<?= $i ?>" name="recibos[]" min="0" placeholder="Valor">
          <input type="date" id="data<?= $i ?>" name="datas[]">
          <br>
        <?php endfor; ?>


      <br>
      <input type="submit" value="Avançar">
      <a href="index.php">
        <button type="button">Voltar</button>
      </a>

    </form>
  </div>
</body>
</html>