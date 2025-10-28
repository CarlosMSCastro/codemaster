<?php

require_once "helpers/base_dados_helper.php";

$nome = '';
if (!empty($_GET['nome'])) {
  $nome = $_GET['nome'];
}
$produto = null;
$procura = null;

if (empty($nome)) {
  $produto = select_sql("SELECT * FROM produtos");
} else {
  $procura = "%$nome%";
  $produto = select_sql("SELECT * FROM produtos WHERE nome LIKE '$procura'");
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
      <input type="text" name="nome" required value="<?= $nome ?>"><br>
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
        <h3>Resultado da buscar por nome(<?= $nome ?>)</h3>
        <?php foreach ($produto as $p) {?>        
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