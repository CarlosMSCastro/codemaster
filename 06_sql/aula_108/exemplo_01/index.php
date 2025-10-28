<?php

require_once "helpers/base_dados_helper.php";

  //$produtos = select_sql("SELECT * FROM produtos ORDER BY fornecedor DESC, preco DESC");
  $produtos = select_sql("SELECT * FROM produtos WHERE preco <=20 ORDER BY preco DESC");



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
  <div class="caixa">
    <h3><?= (!empty($min) && !empty($max)) ? "Produtos entre {$min}€ e {$max}€" : "Todos os produtos" ?></h3>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Código</th>
        <th>Fornecedor</th>
        <th>Stock</th>
      </tr>
      <?php foreach ($produtos as $p): ?>
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
  </div>

</body>
</html>