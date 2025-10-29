<?php
require_once "helpers/base_dados_helper.php";

$termo = "";
$form  = !empty($_GET["termo"]) && !empty($_GET["limit"]) && isset($_GET["offset"]);

if ($form) {
  $termo  = $_GET["termo"];
  $limit = intval($_GET["limit"]);
  $offset = intval($_GET["offset"]);
  $produtos = select_sql("SELECT * FROM produtos WHERE nome LIKE '%$termo%' LIMIT $limit OFFSET $offset");
} else {
  $produtos = select_sql("SELECT * FROM produtos");
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
      <input type="text" name="termo" required placeholder="Pesquisa" value="<?= $termo ?>"><br>
      <input type="number" name="limit" min="1" required placeholder="Limit"><br>
      <input type="number" name="offset" min="0" required placeholder="Offset"><br>
      <button type="submit">Pesquisar</button><br>
      <a href="?">Reset</a>
    </form>
  </div>
  
  <?php if($produtos){ ?>
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
        <h3>Resultado da buscar por nome(<?= $termo ?>)</h3>
        <?php foreach ($produtos as $p) {?>        
        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= $p["preco"] ?>€</td>
          <td><?= $p["codigo"] ?></td>
          <td><?= $p["fornecedor"] ?></td>
          <td><?= $p["stock"] ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
  <?php } ?>

</body>
</html>