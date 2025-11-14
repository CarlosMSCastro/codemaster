<?php

require_once "bootstrap.php";

verificar_logado();
verificar_admin();

$form = !empty($_POST["nome"]) && !empty($_POST["apelido"]) && !empty($_POST["nif"]) && !empty($_POST["morada"]) && !empty($_POST["idade"]) && !empty($_POST["login"]) && !empty($_POST["senha"]);
if($form){
  $nome = $_POST["nome"];
  $apelido = $_POST["apelido"];
  $nif = $_POST["nif"];
  $morada = $_POST["morada"];
  $idade = $_POST["idade"];
  $login = $_POST["login"];
  $senha = $_POST["senha"];
  $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

  $id_admin = $colaborador["id"];

  $busca = select_sql_unico("SELECT * FROM colaboradores WHERE login=?", [$login]);

  if(empty($busca)){
    idu_sql("INSERT INTO colaboradores (nome, apelido, nif, morada, idade, login, senha_cript, criador) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [$nome, $apelido, $nif, $morada, $idade, $login, $senha_cript, $id_admin]);
    header("Location: home.php");
  }
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 120.5</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <h1>Novo Colaborador</h1>

  <div class="caixa">

    <form action="" method="post" autocomplete="off">
      <input type="text" name="nome" required placeholder="Nome" autofocus>
      <br><br>
      <input type="text" name="apelido" required placeholder="Apelido">
      <br><br>
      <input type="text" minlength="3" maxlength="4" name="nif" required placeholder="NIF">
      <br><br>
      <input type="text" name="morada" required placeholder="Morada">
      <br><br>
      <input type="number" name="idade" required placeholder="Idade" min="0">
      <br><br>
      <?php if($form): ?>
        <h3>Este login já existe, tente outro</h3>
        <br>
      <?php endif ?>
      <input type="text" name="login" required placeholder="Login">
      <br><br>
      <input type="password" name="senha" required placeholder="Senha">
      <br><br>
      <input type="submit" value="Criar">
    </form>
  </div>
  
</body>
</html>