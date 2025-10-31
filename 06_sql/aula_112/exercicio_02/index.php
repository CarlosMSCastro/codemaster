<?php
require_once "helpers/base_dados_helper.php";

$nome="";
$form  = !empty($_GET["nome"]) && !empty($_GET["preco"]) && isset($_GET["stock"]) && isset($_GET["stock"]) && isset($_GET["codigo"]);

if ($form) {
  $nome  = $_GET["nome"];
  $preco = floatval($_GET["preco"]);
  $stock = intval($_GET["stock"]);
  $codigo = ($_GET["codigo"]);
  $fornecedor = ($_GET["fornecedor"]);
  
  idu_sql("INSERT INTO produtos (nome, preco, stock, codigo, fornecedor) VALUES('$nome', '$preco','$stock','$codigo','$fornecedor')");

  header("Location: index.php");
}

$produtos = select_sql("SELECT * FROM produtos ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula112-Ex.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>INSET INTO</h1>
  <div class="caixa">
    <h3>Novo Produto</h3>
    <form method="get" action="">
      <input type="text" name="nome" required placeholder="Nome" value="<?= $nome ?>">
      <input type="number" name="preco" min="0" step="0.01" required placeholder="Preço"><br>
      <input type="number" name="stock" min="0" required placeholder="Stock">
      <input type="number" name="codigo" min="0" required placeholder="Código"><br>
      <input type="text" name="fornecedor"  required placeholder="Fornecedor"><br>
      <button type="submit">Registar</button><br>
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
        <h3>Resultado da buscar por nome(<?= $nome ?>)</h3>
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