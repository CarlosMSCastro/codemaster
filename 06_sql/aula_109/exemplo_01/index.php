<?php

require_once "helpers/base_dados_helper.php";

$coluna = $_GET['coluna'] ?? null;
$ordem = $_GET['ordem'] ?? null;

if (!empty($coluna) && !empty($ordem)) {
  $produtos = select_sql("SELECT * FROM produtos ORDER BY $coluna $ordem");
} else {
  $produtos = select_sql("SELECT * FROM produtos");
}

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
  <h1>Select + Where + Between</h1>
  <div class="caixa">
    <h3>Formulário</h3>
    <form method="get" action="">
      <label>Coluna:</label>
      <select name="coluna" required>
        <option value="preco" <?= ($coluna == 'preco') ? 'selected' : '' ?>>Preço</option>
        <option value="fornecedor" <?= ($coluna == 'fornecedor') ? 'selected' : '' ?>>Fornecedor</option>
        <option value="stock" <?= ($coluna == 'stock') ? 'selected' : '' ?>>Stock</option>
        <option value="id" <?= ($coluna == 'id') ? 'selected' : '' ?>>ID</option>
        <option value="nome" <?= ($coluna == 'nome') ? 'selected' : '' ?>>Nome</option>
      </select>

      <label>Ordenar:</label>
      <select name="ordem" required>
        <option value="ASC"<?= ($ordem == 'ASC') ? 'selected' : '' ?>>Ascendente</option>
        <option value="DESC"<?= ($ordem == 'DESC') ? 'selected' : '' ?>>Descendente</option>
      </select><br>
      <button type="submit">Enviar</button><br>
      <a href="?">Reset</a>
    </form>
  </div>
  <div class="caixa">
    <h3><?= (!empty($coluna) && !empty($ordem)) ? "Produtos ordenados por {$coluna} ({$ordem})" : "Todos os produtos" ?></h3>
    <table>
      <tr>
        <th <?= ($coluna == 'id') ? 'class="active"' : '' ?>>
          ID <?= ($coluna == 'id') ? ($ordem == 'ASC' ? '▲' : '▼') : '' ?>
        </th>
        <th <?= ($coluna == 'nome') ? 'class="active"' : '' ?>>
          Nome<?= ($coluna == 'nome') ? ($ordem == 'ASC' ? '▲' : '▼') : '' ?>
        </th>
        <th <?= ($coluna == 'preco') ? 'class="active"' : '' ?>>
          Preço<?= ($coluna == 'preco') ? ($ordem == 'ASC' ? '▲' : '▼') : '' ?>
        </th>
        <th <?= ($coluna == 'preco') ? 'class="active"' : '' ?>>
          Código<?= ($coluna == 'codigo') ? ($ordem == 'ASC' ? '▲' : '▼') : '' ?>
        </th>
        <th <?= ($coluna == 'fornecedor') ? 'class="active"' : '' ?>>
          Fornecedor<?= ($coluna == 'fornecedor') ? ($ordem == 'ASC' ? '▲' : '▼') : '' ?>
        </th>
        <th <?= ($coluna == 'stock') ? 'class=active' : '' ?>>
          Stock<?= ($coluna == 'stock') ? ($ordem == 'ASC' ? '▲' : '▼') : '' ?></th>
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