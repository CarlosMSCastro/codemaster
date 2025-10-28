<?php

$form = !empty($_GET["nome"]) && !empty($_GET["apelido"]) && !empty($_GET["morada"]);
if($form){
  $nome = $_GET["nome"];
  $apelido = $_GET["apelido"];
  $morada = $_GET["morada"];
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
    <form action="saida.php">     
      <input type="hidden" name="nome" value="<?=$nome?>">      
      <input type="hidden" name="apelido" value="<?=$apelido?>">  
      <input type="hidden" name="morada" value="<?=$morada?>">  
      <h2>Etapa: 2/3</h2>
      <br>
      <input type="number" min="1" name="idade" placeholder="Idade" required>
      <br>
      <select name="resposta" id="resposta" required>
        <option value="" disabled selected>---Possui conhecimentos de Programação?---</option>
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
      </select>
      <br>
      <input type="submit" value="Avançar">
      <a href="index.php">
        <button type="button">Voltar</button>
      </a>
    </form>
  </div>
</body>
</html>