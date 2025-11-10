<?php

require_once "helpers/base_dados_helper.php";

$pagina = $_GET["pagina"] ?? 1;
$elemento_por_pagina = 3;
$ignorar = ($pagina - 1) * $elemento_por_pagina;
$total_elementos = select_sql_unico("SELECT Count(*) FROM produtos")["Count(*)"];
$total_paginas = ceil($total_elementos / $elemento_por_pagina);

$produtos = select_sql("SELECT * FROM produtos LIMIT $elemento_por_pagina OFFSET $ignorar");

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 113.2</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <h1>Sistema de Paginação</h1>

  <div class="caixa">
    <h3>
      Produtos
    </h3>
    <br>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Stock</th>
        <th>Código</th>
        <th>Fornecedor</th>
      </tr>

      <?php foreach($produtos as $p): ?>

        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= number_format($p["preco"], 2, ",", " ") ?> €</td>
          <td><?= $p["stock"] ?></td>
          <td><?= $p["codigo"] ?></td>
          <td><?= $p["fornecedor"] ?></td>
        </tr>

      <?php endforeach ?>

    </table>
  </div>

  <div class="paginacao">

    <?php for($i=1; $i<=$total_paginas; $i++): ?>

      <a href="index.php?pagina=<?= $i ?>">
        <button class="<?= ($i == $pagina) ? "active" : "" ?>"><?= $i ?></button>
      </a>

    <?php endfor ?>

  </div>

</body>
</html>