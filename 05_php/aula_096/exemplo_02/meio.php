<?php


$form = !empty($_GET["total"]);
if($form){
  $total = intval($_GET["total"]);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 095- Exemplo02</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h2>Meio</h2>
  <div class="caixa">
    <form action="saida.php">
      <input type="hidden" name="total" value="<?= $total ?>">
      <?php for($i=1; $i<=$total; $i++): ?>

        <input type="number" name="alunos[]" placeholder="Aluno <?= $i ?>" required>
        <br><br>

      <?php endfor ?>

    <input type="submit" value ="Avançar">
    </form>
  </div>
</body>
</html>