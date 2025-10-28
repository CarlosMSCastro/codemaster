<?php

require_once "helpers/base_dados_helper.php";

$id = $_GET['id'] ?? null;
$produto = null;

if (!empty($id)) {
  $produto = select_sql_unico("SELECT * FROM produtos WHERE id = $id");
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula110-Ex.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="caixa">
    <h3>Formulário</h3>
    <form method="get" action="">
      <label>ID</label>
      <input type="number" name="id" required value="<?= $id ?>"><br>
      <button type="submit">Pesquisar</button><br>
      <a href="?">Reset</a>
    </form>
  </div>
  
  <?php if($produto){ ?>
    <div class="caixa">
      <table>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Código</th>
          <th>Fornecedor</th>
          <th>Stock</th>
        </tr>
        <tr>
          <h3>Resultado da buscar por id(<?= $id ?>)</h3>
          <td><?= $produto["id"] ?></td>
          <td><?= $produto["nome"] ?></td>
          <td><?= $produto["preco"] ?>€</td>
          <td><?= $produto["codigo"] ?></td>
          <td><?= $produto["fornecedor"] ?></td>
          <td><?= $produto["stock"] ?></td>
        </tr>
      </table>
    </div>
  <?php } ?>

</body>
</html>