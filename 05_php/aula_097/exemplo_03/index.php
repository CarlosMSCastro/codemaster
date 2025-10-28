<?php

require_once "globais.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 097- Exemplo 03</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Início</h2>

  <table>
    <tr>
      <th>Nome</th>
      <th>Idade</th>
      <th>Morada</th>
    </tr>

    <?php for($i=0; $i<count($alunos); $i++): ?>
      <tr>
        <td><?= $alunos[$i]["nome"] ?></td>
        <td><?= $alunos[$i]["idade"] ?> anos</td>
        <td><?= $alunos[$i]["morada"] ?></td>
      </tr>
    <?php endfor ?>

  </table>



</body>
</html>