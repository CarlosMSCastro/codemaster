<?php

require_once "bootstrap.php";

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);
if($form){
  $login = $_POST["login"];
  $senha = $_POST["senha"];
  // fazer_login($login, $senha);
  fazer_login_cript($login, $senha);
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

  <h1>Login</h1>

  <div class="caixa">

    <?php if($form): ?>
      <h3 style="color: red;">LOGIN INVÁLIDO!</h3>
      <br>
    <?php endif ?>

    <form action="" method="post" autocomplete="off">
      <input type="text" name="login" required placeholder="Login" autofocus>
      <br><br>
      <input type="password" name="senha" required placeholder="Senha">
      <br><br>
      <input type="submit" value="Aceder">
    </form>
  </div>

  <br>

  <a href="criar_colaborador.php">
    Criar Nova Conta
  </a>
  
</body>
</html>