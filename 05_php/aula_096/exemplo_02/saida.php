<?php

$total =0;
$media =0;
$form = !empty($_GET["total"]) && !empty($_GET["alunos"]);
if($form){
  $total = intval($_GET["total"]);
  $alunos = $_GET["alunos"];


  $soma_total = array_sum($alunos);
  $media = $soma_total / $total;

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

  <h1>Saída</h1>

  <div class="caixa">
    
      <ol>
        <?php for($i=0; $i<$total; $i++): ?>
          <li><?= $alunos[$i] ?></li>
         <?php endfor ?>
      </ol>
   
    <h2>Média das Idades: (<?= number_format($media,1) ?>)</h2>
  </div>
  <a href="index.php">
    <button>Voltar</button>
  </a>
</body>
</html>