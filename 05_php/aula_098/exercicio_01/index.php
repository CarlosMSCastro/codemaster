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

    <?php foreach($pessoas as $p): ?>
      <tr>
        <td><?= $p["nome"] ?></td>
        <td><?= $p["idade"] ?> anos</td>
        <td><?= $p["morada"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <hr>
   <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Idade</th>
      <th>Morada</th>
    </tr>

    <?php foreach($pessoas as $i => $p): ?>
      <tr>
        <td><?= $i+1 ?></td>
        <td><?= $p["nome"] ?></td>
        <td><?= $p["idade"] ?> anos</td>
        <td><?= $p["morada"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>
</html>