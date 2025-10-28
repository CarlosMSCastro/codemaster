<?php
require_once "globais.php";

$form = !empty($_POST["nome"]) && !empty($_POST["idade"]) && !empty($_POST["altura"]) && !empty($_POST["peso"]) && !empty($_POST["imc"]) && !empty($_POST["genero"]); 

if ($form){
  $novapessoa = [
    "nome" => $_POST["nome"],
    "idade" => $_POST["idade"],
    "altura" => $_POST["altura"],
    "peso" => $_POST["peso"],
    "imc" => $_POST["imc"],
    "genero" => $_POST["genero"],
  ];
  $pessoas[] = $novapessoa;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 098- Exemplo 02</title>
  <link rel="stylesheet" href="style.css">
</head>
<body> 
  <h1>Registo</h1>
  <?php if (!$form): ?>
    <form method="post">
        <input type="text" name="nome" placeholder="Primeiro e Ultimo Nome" required><br>
        <input type="number" name="idade" placeholder="Idade" required><br>
        <input type="number" step="0.01" min="1" name="altura" placeholder="Altura em m" required><br>
        <input type="number" step="0.1" min="1" name="peso" placeholder="Peso em Kg" required><br>
        <input type="number" name="imc" min="1" step="0.01" required placeholder="IMC"><br>
        <select name="genero" required>
            <option value="">Género</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select><br><br>
        <button type="submit">Enviar</button>
    </form>
  <?php endif; ?>

  <?php if ($form): ?>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Altura</th>
        <th>Peso</th>
        <th>IMC</th>
        <th>Género</th>
      </tr>
      <?php foreach($pessoas as $i => $p): ?>
        <tr>
          <td><?= $i+1 ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= $p["idade"] ?> anos</td>
          <td><?= $p["altura"] ?> m</td>
          <td><?= $p["peso"] ?> Kg</td>
          <td><?= $p["imc"] ?> </td>
          <td><?= $p["genero"] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>

</body>
</html>