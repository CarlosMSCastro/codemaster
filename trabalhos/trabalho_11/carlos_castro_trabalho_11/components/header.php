<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Papelaria 2025</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<header class="caixa">
  <h1>Sistema Papelaria 2025</h1>

  <?php if(isset($_SESSION["colaborador"])): ?>
    <nav style="margin-top:20px;">
      <a href="home.php">Home</a>
      <a href="listar_produtos.php">Listar Produtos</a>
      <a href="pesquisar_produto.php">Pesquisar Produto</a>
      <a href="novo_produto.php">Novo Produto</a>
      <a href="editar_produto.php">Editar Produto</a>
      <a href="apagar_produto.php">Apagar Produto</a>
      <a href="vender_produto.php">Registar Venda</a>
      <a href="logout.php">Sair</a>
    </nav>
<?php endif; ?>
</header>
