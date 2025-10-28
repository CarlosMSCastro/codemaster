<?php

require_once "helpers/base_dados_helper.php";

$min = $_GET['min'] ?? null;
$max = $_GET['max'] ?? null;

if (!empty($_GET['min']) && !empty($_GET['max'])) {
  $produtos = select_sql("SELECT * FROM produtos WHERE preco BETWEEN $min AND $max");
} 
else {
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
      <input type="number" step="0.01" name="min" placeholder="Preço Minimo" required>
      <input type="number" step="0.01" name="max" placeholder="Preço Máximo"required><br>
      <button type="submit">Enviar</button><br>
      <a type="button" href="?">Reset</a>
    </form>
  </div>
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