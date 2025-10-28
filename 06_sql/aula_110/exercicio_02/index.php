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
  <title>Aula110-Ex.1.2</title>
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
  
  <?php if ($produto) { ?>
    <div class="caixa">
      <h3>Resultado da busca pelo id (<?= $id ?>)</h3>
      <ul>
        <li>Id: ( <?= $produto["id"] ?> )</li>
        <li>Nome: ( <?= $produto["nome"] ?> )</li>
        <li>Preço: ( <?= $produto["preco"] ?> € )</li>
        <li>Stock: ( <?= $produto["stock"] ?> unidades )</li>
        <li>Código: ( <?= $produto["codigo"] ?> )</li>
        <li>Fornecedor: ( <?= $produto["fornecedor"] ?> )</li>
      </ul>
    </div>
  <?php } else { ?>
    <div class="caixa">
      <h3>Sem resultados na busca pelo id (<?= $id ?>)</h3>
    </div>
  <?php } ?>


</body>
</html>