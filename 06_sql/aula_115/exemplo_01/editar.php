<?php

require_once "helpers/base_dados_helper.php";

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 114.1</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

  <h1>Editar</h1>

  <div class="caixa">
    <form action="">
      <input type="text" name="nome" placeholder="Nome" required autofocus value="<?= $nome ?>">
      <br><br>
      <input type="number" name="preco" placeholder="Preço" required min="0.01" step="0.01" value="<?= $preco ?>">
      <br><br>
      <input type="number" name="stock" placeholder="Stock" required min="0" value="<?= $stock ?>">
      <br><br>
      <input type="text" name="codigo" placeholder="Código" minlength="3" maxlength="3" required value="<?= $codigo ?>">
      <br><br>
      <input type="text" name="fornecedor" placeholder="Fornecedor" required value="<?= $fornecedor ?>">
      <br><br>
      <input type="submit" value="Registar">
    </form>
  </div>

</body>
</html>