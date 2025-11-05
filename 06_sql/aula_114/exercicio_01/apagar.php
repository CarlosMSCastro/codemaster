<?php

require_once "helpers/base_dados_helper.php";

$form = !empty($_GET["id"]);

if($form){
  $id = intval($_GET["id"]);
  $pe = select_sql_unico("SELECT nome FROM produtos WHERE id=$id");
  $resposta = $_GET["resposta"] ?? null;
  if(!empty($resposta)){
    idu_sql("INSERT INTO produtos_backup SELECT * FROM produtos WHERE id=$id");
    idu_sql("DELETE FROM produtos WHERE id=$id");
    header("Location: index.php");
  }
}

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>DELETE FROM </h1>
  <div class="caixa">
    <h3>Tem a certeza que pretende apagar o produto?</h3>
    <br>
    (<?= $id ?>) - (<?= $pe["nome"] ?>) 
    <a href="apagar.php?id=<?= $id ?>&resposta=sim">
      <button class="sim">Sim</button>  
    </a>
    <a href="index.php" class=>
      <button class="nao">Não</button>
    </a>  
  </div>
  
</body>
</html>