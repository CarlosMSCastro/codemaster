<?php

require_once "bootstrap.php";

verificar_login();
$produtos = select_sql("SELECT * FROM produtos ORDER BY id DESC");

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 116.1</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

  <h1>Home</h1>

  <nav>
    <a href="home.php">HOME</a>
    <a href="sair.php">SAIR</a>
  </nav>
  <h3>Bem-Vindo <?= $colaborador["nome"] ?></h3>

  <div class="caixa">
    <h3>
      Produtos
    </h3>
    <br>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Stock</th>
        <th>Código</th>
        <th>Fornecedor</th>
      </tr>

      <?php foreach($produtos as $p): ?>

        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= number_format($p["preco"], 2, ",", " ") ?> €</td>
          <td><?= $p["stock"] ?></td>
          <td><?= $p["codigo"] ?></td>
          <td><?= $p["fornecedor"] ?></td>          
        </tr>

      <?php endforeach ?>

    </table>
  </div>

</body>
</html>