<?php
require_once "helpers/base_dados_helper.php";


$produtos = select_sql("SELECT * FROM produtos ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula114-Ex.1</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Delete</h1>
  <nav>
    <ul>
      <li><a href="index.php">Início</a></li>
      <li><a href="produtos_lixo.php">Lixo</a></li>
    </ul>
  </nav>
  <?php if($produtos){ ?>
    <div class="caixa">
      <h3>Todos os Produtos</h3>
      <table>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Código</th>
          <th>Fornecedor</th>
          <th>Stock</th>
          <th>Ações</th>
        </tr>
        <?php foreach ($produtos as $p) {?>        
        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= $p["preco"] ?>€</td>
          <td><?= $p["codigo"] ?></td>
          <td><?= $p["fornecedor"] ?></td>
          <td><?= $p["stock"] ?></td>
          <td>
            <a href="apagar.php?id=<?= $p ['id'] ?>">
              <button><i class="bi bi-trash3-fill"></i></button>
            </a>
          </td>
        </tr>
        <?php } ?>
      </table>
    </div>
  <?php } ?>

</body>
</html>