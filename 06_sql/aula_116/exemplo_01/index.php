<?php

require_once "helpers/base_dados_helper.php";

$produtos = select_sql("SELECT * FROM produtos ORDER BY id DESC");

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 114.1</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

  <h1>UPDATE</h1>

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
        <th>Ações</th>
      </tr>

      <?php foreach($produtos as $p): ?>

        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= number_format($p["preco"], 2, ",", " ") ?> €</td>
          <td><?= $p["stock"] ?></td>
          <td><?= $p["codigo"] ?></td>
          <td><?= $p["fornecedor"] ?></td>
          <td>
            <a href="editar.php?id=<?= $p["id"] ?>">
              <button class="icone editar">
                <i class="bi bi-pen"></i>
              </button>
            </a>
          </td>
        </tr>

      <?php endforeach ?>

    </table>
  </div>

</body>
</html>