<?php

require_once "helpers/base_dados_helper.php";

$form_2 = "";

$form = !empty($_GET["id"]);
if($form){
  $id = intval($_GET["id"]);
  $pe = select_sql_unico("SELECT * FROM produtos WHERE id=$id");
  if(empty($pe)){
    header("Location: index.php");
  }

  $form_2 = !empty($_GET["nome"]) && !empty($_GET["preco"]) && !empty($_GET["stock"]) && !empty($_GET["codigo"]) && !empty($_GET["fornecedor"]);
  if($form_2){
    $nome = $_GET["nome"];
    $preco = floatval($_GET["preco"]);
    $stock = intval($_GET["stock"]);
    $codigo = $_GET["codigo"];
    $fornecedor = $_GET["fornecedor"];

    if($codigo == $pe["codigo"]){
      idu_sql("UPDATE produtos SET nome='$nome',preco=$preco,stock=$stock,codigo='$codigo',fornecedor='$fornecedor' WHERE id=$id");
      header("Location: index.php");
    }
    else{
      $busca = select_sql_unico("SELECT * FROM produtos WHERE codigo='$codigo'");
      if(empty($busca)){
        idu_sql("UPDATE produtos SET nome='$nome',preco=$preco,stock=$stock,codigo='$codigo',fornecedor='$fornecedor' WHERE id=$id");
        header("Location: index.php");
      }
    }

  }

}
else{
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

    <?php if($form && $form_2): ?>
      <h3 style="color: red;">O código (<?= $codigo ?>) já existe, tente outro.</h3>
      <br>
    <?php endif ?>

    <form action="">

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
      <input type="submit" value="Editar">
    </form>
  </div>

</body>
</html>