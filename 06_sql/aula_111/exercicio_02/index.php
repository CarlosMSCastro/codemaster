<?php
require_once "helpers/base_dados_helper.php";


$min = select_sql_unico("SELECT Min(preco) FROM produtos")["Min(preco)"];
$max = select_sql_unico("SELECT Max(preco) FROM produtos")["Max(preco)"];
$avg = number_format(select_sql_unico("SELECT Avg(preco) FROM produtos")["Avg(preco)"],2, ',','');
$total = select_sql_unico("SELECT Count(*) FROM produtos")["Count(*)"];
$stock = select_sql_unico("SELECT Sum(stock) FROM produtos")["Sum(stock)"];

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula11-Ex.</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>SELECT + Count() + Min() + Max() + Avg()</h2>
  <div class="caixa">
    <h3>Resultados</h3>
      <p>Menor Preço: (<?= $min ?> €)</p>
      <p>Maior Preço: (<?= $max ?> €)</p>
      <p>Média dos Preços: (<?= $avg ?> €)</p>
      <p>Soma total do stock: (<?= $stock ?>)</p>
      <p>Total de Produtos: (<?= $total ?>)</p>
    </form>
  </div>
  
</body>
</html>