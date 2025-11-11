<?php

require_once "helpers/base_dados_helper.php";

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);
if($form){
  $login = $_POST["login"];
  $senha = $_POST["senha"];
  
  $colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");

  if(!empty($colaborador)){
    session_start();
    $_SESSION["colaborador"] = $colaborador;
    header("Location: home.php");
  }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex 119.4</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Login</h1>
  <div class="caixa">

    <?php if($form): ?>
      <h3 style="color: red;">LOGIN INVÁLIDO</h3>
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
</body>
</html>