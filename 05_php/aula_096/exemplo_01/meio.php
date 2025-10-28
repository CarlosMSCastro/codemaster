<?php

$form = !empty($_GET["nome"]) && !empty($_GET["morada"]);
if($form){
  $nome = $_GET["nome"];
  $morada = $_GET["morada"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 095- Exemplo02</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="caixa">
    <form action="saida.php">

      <input type="hidden" name="nome" value="<?=$nome?>">      
      <input type="hidden" name="morada" value="<?=$morada?>">  
      
      <h2>Dados da Empresa</h2>
      <br>
      <input type="text" name="empresa" placeholder="Nome da Empresa" required>
      <br><br>
      <input type="number" min="1" name="total" placeholder="Total de Colaboradores" required>
      <br><br>
      <input type="submit" value="Avançar">
    </form>
  </div>
</body>
</html>