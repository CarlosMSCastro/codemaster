<?php

require_once "bootstrap.php";

verificar_logado();

$pagina = $_GET["pagina"] ?? 1;
$elemento_por_pagina = 3;
$total_elementos = select_sql_unico("SELECT Count(*) FROM produtos")["Count(*)"];
$total_paginas = ceil($total_elementos / $elemento_por_pagina);
if($pagina < 1){$pagina = 1;}
elseif($pagina > $total_paginas){$pagina = $total_paginas;}
$ignorar = ($pagina - 1) * $elemento_por_pagina;

$abreviar = 2;
$inicio = $pagina - $abreviar;
$fim = $pagina + $abreviar;

if($inicio < 1){$inicio = 1;}
if($fim > $total_paginas){$fim = $total_paginas;}

// $elemento_por_pagina = intval($elemento_por_pagina);
// $ignorar = intval($ignorar);
// $produtos = select_sql("SELECT * FROM produtos LIMIT $elemento_por_pagina OFFSET $ignorar");
$produtos = select_sql("SELECT * FROM produtos LIMIT ? OFFSET ?", [$elemento_por_pagina, $ignorar]);



?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 120.1</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <h1>Home</h1>

  <h3>Bem-vindo <?= $colaborador["nome"] ?></h3>
  <?php if(!empty($colaborador["data_ultimo_acesso_melhorado"])): ?>
    <h3>
      Data do último acesso: ( <?= date("H:i:s - d/m/Y", strtotime($colaborador["data_ultimo_acesso_melhorado"])) ?> )
    </h3>
  <?php endif ?>

  <nav>
    <a href="sair.php">Sair</a>
  </nav>

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

    <a href="home.php?pagina=1">
      <button>|<</button>
    </a>

    <a href="home.php?pagina=<?= $pagina-1 ?>">
      <button><</button>
    </a>

    <?php if($pagina >= $abreviar + 2): ?>
      <div>...</div>
    <?php endif ?>

    <?php for($i=$inicio; $i<=$fim; $i++): ?>

      <a href="home.php?pagina=<?= $i ?>">
        <button class="<?= ($i == $pagina) ? "active" : "" ?>"><?= $i ?></button>
      </a>

    <?php endfor ?>

    <?php if($pagina < $total_paginas - $abreviar): ?>
      <div>...</div>
    <?php endif ?>

    <a href="home.php?pagina=<?= $pagina+1 ?>">
      <button>></button>
    </a>

    <a href="home.php?pagina=<?= $total_paginas ?>">
      <button>>|</button>
    </a>

  </div>

</body>
</html>