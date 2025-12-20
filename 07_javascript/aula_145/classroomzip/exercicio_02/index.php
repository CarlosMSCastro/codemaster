<?php

$form = !empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["mensagem"]);
if($form){

  $g_recaptcha_response = $_POST["g-recaptcha-response"];
  $chave_secreta = "6LdKHzEsAAAAAKYihJZfd7JyCTYWI79AzCi7h46t";
  $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$chave_secreta&response=$g_recaptcha_response");
  $google = json_decode($resposta);

  // print_r($google);
  
  if($google->success){

    echo "RECAPTCHA SUCESSO!";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $mensagem_final = "
      <h1 style='text-align: center;'>Google</h1>
      <ul>
        <li>Nome: $nome</li>
        <li>Email: $email</li>
        <li>Mensagem: $mensagem</li>
      </ul>
    ";

    $headers = "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n";

    // Enviar email para o dono do site
    mail("nimevi7406@mekuron.com", "Formulário de Contacto", $mensagem_final, $headers);

    if(!empty($_POST["copia"])){
      // Enviar uma cópia do email para o cliente que submeteu o formulário
      mail($email, "Formulário de Contacto", $mensagem_final, $headers);
    }

  }
  else{
    echo "RECAPTCHA FALHA!";
  }

}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 145.1</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/classes/Produto.js" defer></script>
  <script src="js/funcoes.js" defer></script>
  <script src="js/main.js" defer></script>

  <!-- RECAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>

  <h1>PHP - mail()</h1>

  <div class="caixa">
    <form action="" autocomplete="off" method="post">
      <input type="text" name="nome" required autofocus placeholder="Nome">
      <br><br>
      <input type="email" name="email" required placeholder="E-mail">
      <br><br>
      <textarea name="mensagem" cols="40" rows="10" placeholder="Mensagem"></textarea>
      <br><br>
      <input type="checkbox" name="copia">
      <br><br>
      <div class="d-flex">
        <div class="g-recaptcha" data-sitekey="6LdKHzEsAAAAACDWGZ5oSnQMviTDdo5-TRFt7aKK"></div>
      </div>
      <br><br>
      <input type="submit" value="Registar">
    </form>
  </div>

</body>
</html>