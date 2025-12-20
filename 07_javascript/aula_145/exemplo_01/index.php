<?php

$form = !empty($_GET["nome"]) && !empty($_GET["email"]) && !empty($_GET["mensagem"]);
if($form){
  $nome = $_GET["nome"];
  $email = $_GET["email"];
  $mensagem = $_GET["mensagem"];

  mail("teste@mail.com", "Assunto", $mensagem);
  if(!empty($_GET["copia"])){
    mail($email, "Assunto", $mensagem);
  }
}

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 144.3</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/classes/Produto.js" defer></script>
  <script src="js/funcoes.js" defer></script>
  <script src="js/main.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

  <h1>PHP - mail()</h1>

  <div class="caixa" id="saida">
    <h3>formulário</h3>
    <br>
    <form action="" autocomplete="off" method="post">
      <input type="text" name="nome" placeholder="Nome" required autofocus><br><br>
      <input type="text" name="email" placeholder="E-mail" required autofocus><br><br>
      <textarea name="mensagem" cols="20" rows="10" placeholder="Mensagem"></textarea><br><br>
      <input type="checkbox" name="copia"><br><br>
      <div class="g-recaptcha" data-sitekey=""></div>
      <input type="submit" value="Enviar">
    </form>
  </div>

</body>
</html>