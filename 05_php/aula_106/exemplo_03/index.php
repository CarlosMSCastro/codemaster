<?php

require_once "helpers/base_dados_helper.php";

$produtos = select_sql("SELECT * FROM produtos");
$clientes = select_sql("SELECT * FROM clientes");
$colaboradores = select_sql("SELECT * FROM colaboradores");

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
  <h3>Produtos</h3>
  <table>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Stock</th>
    </tr>
    <?php foreach ($produtos as $p): ?>
      <tr>
        <td><?= $p["nome"] ?></td>
        <td><?= $p["preco"] ?>€</td>
        <td><?= $p["stock"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  
  <h3>Clientes</h3>
  <table>
    <tr>
      <th>Nome</th>
      <th>Apelido</th>
      <th>Idade</th>
      <th>Morada</th>
    </tr>
    <?php foreach ($clientes as $c): ?>
      <tr>
        <td><?= $c["nome"] ?></td>
        <td><?= $c["apelido"] ?></td>
        <td><?= $c["idade"] ?></td>
        <td><?= $c["morada"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <h3>Colaboradores</h3>
  <table>
    <tr>
      <th>Nome</th>
      <th>NIF</th>
      <th>Morada</th>
      <th>Idade</th>
    </tr>
    <?php foreach ($colaboradores as $i): ?>
      <tr>
        <td><?= $i["nome"] ?></td>
        <td><?= $i["nif"] ?></td>
        <td><?= $i["morada"] ?></td>
        <td><?= $i["idade"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>