<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Papelaria 2025</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<header class="caixa">
  <h1>Sistema Papelaria 2025</h1>

  <?php if(isset($_SESSION["colaborador"])): ?>
    <nav>
      <a href="home.php" class="<?php echo ($pagina == 'home') ? 'active' : ''; ?>">Home</a>
      <a href="listar_produtos.php" class="<?php echo ($pagina == 'listar_produtos') ? 'active' : ''; ?>">Listar Produtos</a>
      <a href="procurar_id.php" class="<?php echo ($pagina == 'procurar_id') ? 'active' : ''; ?>">Procurar Código</a>
      <a href="registar_produto.php" class="<?php echo ($pagina == 'registar_produto') ? 'active' : ''; ?>">Registar Produto</a>
      <a href="editar_produtos.php" class="<?php echo ($pagina == 'editar_produtos') ? 'active' : ''; ?>">Editar Produto</a>
      <a href="apagar_produto.php" class="<?php echo ($pagina == 'apagar_produto') ? 'active' : ''; ?>">Apagar Produto</a>
      <a href="registar_venda.php" class="<?php echo ($pagina == 'registar_venda') ? 'active' : ''; ?>">Registar Venda</a>
      <a href="logout.php">Sair</a>
    </nav>
  <?php endif; ?>
</header>
