<?php
session_start();
session_destroy();

require_once "bootstrap.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Papelaria 2025</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<header class="caixa">
  <h1>Terminou a sua sessão</h1>
  <a href="login.php">
    <button type="">Entrar</button>
  </a>

<?php require_once "components/footer.php"; ?>