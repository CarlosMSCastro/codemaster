<?php
require_once "helpers/base_dados_helper.php";

$produtos1 = select_sql("SELECT * FROM produtos WHERE fornecedor IN ('pc diga','global data','worten')");
$produtos2 = select_sql("SELECT * FROM produtos WHERE fornecedor NOT IN ('pc diga','global data','worten')");
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
  <h1>SELECT + IN + NOT IN</h1>  
    <div class="caixa">
      <table>
        <h3>Produtos que <span style="background-color:green"> são</span> fornecedor PC Diga, Global Data ou Worten</h3> 
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Código</th>
          <th>Fornecedor</th>
          <th>Stock</th>
        </tr>
        <?php foreach ($produtos1 as $p) {?>        
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
    <div class="caixa">
      <table>
        <h3>Produtos que <span style="background-color:red">não são</span> do fornecedor PC Diga, Global Data ou Worten</h3> 
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Código</th>
          <th>Fornecedor</th>
          <th>Stock</th>
        </tr>
        <?php foreach ($produtos2 as $p) {?>        
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


</body>
</html>