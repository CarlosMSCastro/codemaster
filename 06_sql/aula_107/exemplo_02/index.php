<?php

require_once "helpers/base_dados_helper.php";


$produtos1 = select_sql("SELECT * FROM produtos WHERE preco > 1 AND preco < 8");
$produtos2 = select_sql("SELECT * FROM produtos WHERE preco BETWEEN 1 AND 8");


?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Lista de Produtos com preço entre 1,00€ e 8,00€</h1>
  <h3>Lista de Produtos a usar ">" e "<"</h3>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Código</th>
      <th>Fornecedor</th>
      <th>Stock</th>
    </tr>
    <?php foreach ($produtos1 as $p): ?>
      <tr>
        <td><?= $p["id"] ?></td>
        <td><?= $p["nome"] ?></td>
        <td><?= $p["preco"] ?>€</td>
        <td><?= $p["codigo"] ?></td>
        <td><?= $p["fornecedor"] ?></td>
        <td><?= $p["stock"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <h3>Lista de Produtos a usar BETWEEN</h3>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Código</th>
      <th>Fornecedor</th>
      <th>Stock</th>
    </tr>
    <?php foreach ($produtos2 as $p): ?>
      <tr>
        <td><?= $p["id"] ?></td>
        <td><?= $p["nome"] ?></td>
        <td><?= $p["preco"] ?>€</td>
        <td><?= $p["codigo"] ?></td>
        <td><?= $p["fornecedor"] ?></td>
        <td><?= $p["stock"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>
</html>