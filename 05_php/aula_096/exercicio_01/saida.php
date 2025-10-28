<?php

$form = !empty($_GET["nome"]) && !empty($_GET["apelido"]) && !empty($_GET["morada"]) && !empty($_GET["idade"]) && !empty($_GET["resposta"]); 
if($form){
  $nome = $_GET["nome"];
  $apelido = $_GET["apelido"];
  $morada = $_GET["morada"];
  $idade = $_GET["idade"]; 
  $resposta = $_GET["resposta"];

$candidatura = "";
if($idade >= 18){
  if($resposta == "sim"){
    $candidatura = "Aprovado para o estágio";
  }
  else{
    $candidatura = "Não aprovado para o estágio";
  }
}else{
  if ($resposta == "sim"){
    $candidatura = "APROVADO PARA A ESCOLA DE PROGRAMAÇÃO";
  }
  else{
    $candidatura = "NÃO APROVADO PARA A ESCOLA DE PROGRAMAÇÃO";
  }
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 096 Exercicio 01</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Processo Seletivo</h2>
  <div class="caixa">
    <h2>Etapa 3/3</h2>
    <h4>=== Ficha de Candidatura ===</h4>
    <p>Nome:  (<?= $nome ?>)</p>
    <p>Idade:  (<?= $idade ?>) anos</p>
    <p>Morada:  (<?= $morada ?>)</p>
    <p>Conhecimentos de programação: (<?= $resposta ?>)</p>
  </div>
  <div class="caixa">
    <h2>Resposta a Candidatura</h2>
    <p>Sr.(a) (<?= $nome ?>), gostavamos de informar que o seu status de candidatura é: <br><span id="status"><?= $candidatura ?></span></p>
  </div>
  <a href="meio.php">
    <button>Voltar</button>
  </a>
</body>
</html>