<?php

$form = !empty($_GET["numrecibos"]) && !empty($_GET["recibos"]) && !empty($_GET["datas"]);
if($form){
  $numrecibos = intval($_GET["numrecibos"]);
  $recibos = $_GET["recibos"];
  $datas = $_GET["datas"];
}
else{
  header("Location: index.php");
}


$valorRetido = 0;
$valorIVA = 0;
$valorTotal = 0;

$soma_total = array_sum($recibos);
$valorIVA = $soma_total * 0.23;
$valorRetido = $soma_total - $valorIVA;

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
  <h2>Fim</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Valor</th>
      <th>Data</th>
    </tr>
    <?php for ($i = 0; $i < $numrecibos; $i++): ?>
      <tr>
        <td><?= $i + 1 ?></td>
        <td><?= number_format($recibos[$i],2). " €"?></td>
        <td><?= date("d/m/Y", strtotime($datas[$i])) ?></td>
      </tr>
    <?php endfor; ?>
  </table>

  <div class="last">
      <p>Valor Retido: (<?= number_format($valorRetido, 2) ?> €)</p>
      <p>Valor IVA: (<?= number_format($valorIVA, 2) ?> €)</p>
      <p>Valor Total Arrecadado: (<?= number_format($soma_total, 2) ?> €)</p>
  </div>

  <a href="index.php">
    <button>Voltar</button>
  </a>
  
</body>
</html>