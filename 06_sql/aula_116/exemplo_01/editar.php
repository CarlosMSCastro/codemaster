<?php

require_once "helpers/base_dados_helper.php";
$form = !empty($_GET["id"]);
if($form){
  $id = intval($_GET["id"]);
  $pe = select_sql_unico("SELECT * FROM produtos WHERE id=$id");
  if(!empty($_GET["nome"])){
  $nome = $_GET["nome"];
  $preco = $_GET["preco"];
  $codigo = $_GET["codigo"];
  $fornecedor = $_GET["fornecedor"];
  $stock = $_GET["stock"];

  idu_sql("UPDATE produtos SET nome='$nome', preco=$preco, codigo='$codigo', fornecedor='$fornecedor', stock=$stock WHERE id=$id");
  header("Location: index.php");
  exit;
}
  if(empty($pe)){
    header("Location: index.php");
  }
}else{
  header("Location: index.php");
}

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
    <form method="get" action="">
      <input type="hidden" name="id" value="<?= $id ?>">
      <input type="text" name="nome" placeholder="Nome" required autofocus value="<?= $pe["nome"] ?>">
      <br><br>
      <input type="number" name="preco" placeholder="Preço" required min="0.01" step="0.01" value="<?= $pe["preco"] ?>">
      <br><br>
      <input type="number" name="stock" placeholder="Stock" required min="0" value="<?= $pe["stock"] ?>">
      <br><br>
      <input type="text" name="codigo" placeholder="Código" minlength="3" maxlength="3" required value="<?= $pe["codigo"] ?>">
      <br><br>
      <input type="text" name="fornecedor" placeholder="Fornecedor" required value="<?= $pe["fornecedor"] ?>">
      <br><br>
      <input type="submit" value="Editar"><br><br>
      <a href="index.php">Cancelar</a>
    </form>
  </div>

</body>
</html>