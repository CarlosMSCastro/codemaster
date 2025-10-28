<?php

require_once "helpers/base_dados_helper.php";

$produtos1 = select_sql("SELECT * FROM produtos WHERE fornecedor='PC Diga'");
$produtos2 = select_sql("SELECT * FROM produtos WHERE preco > 90");
$produtos3 = select_sql("SELECT * FROM produtos WHERE preco > 1 AND preco < 8");
$produtos4 = select_sql("SELECT * FROM produtos WHERE id % 2 = 0");
$produtos5 = select_sql("SELECT * FROM produtos WHERE fornecedor ='FNAC' OR stock = 0");


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
  <h3>Produtos do Fornecedor PC Diga</h3>
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
    <h3>Produtos com preço maior que 90€</h3>
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
    <h3>Produtos com preço entre 1,00€ e 8,00€</h3>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Código</th>
      <th>Fornecedor</th>
      <th>Stock</th>
    </tr>
    <?php foreach ($produtos3 as $p): ?>
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
    <h3>Produtos com ID Par</h3>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Código</th>
      <th>Fornecedor</th>
      <th>Stock</th>
    </tr>
    <?php foreach ($produtos4 as $p): ?>
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
    <h3>Produtos da FNAC ou sem stock</h3>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Código</th>
      <th>Fornecedor</th>
      <th>Stock</th>
    </tr>
    <?php foreach ($produtos5 as $p): ?>
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