<?php

$form = !empty($_POST["login"]) && !empty($_POST["palavra_passe"]);
if($form){
  $login = $_POST["login"];
  $palavra_passe = $_POST["palavra_passe"];
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 94-Ex.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" class="caixa" method="post">
      <h1>Login</h1>
      <br>
      <input type="text" name="login" id="login" placeholder="Username" required autofocus>
      <br><br>
      <input type="password" name="palavra_passe" id="palavra_passe" placeholder="Palavra Passe" required>
      <br><br>
      <input type="submit" value="Registar">
    </form>

  <?php if($form): ?>
    <div class="caixa">
      <h1>Login: <?= $login ?></h1>
      <h1>Palavra-passe: <?= $palavra_passe ?></h1> 
    </div>
  <?php endif; ?>
</body>


</html>