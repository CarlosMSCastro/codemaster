<?php

require_once "helpers/base_dados_helper.php";

$pets = select_sql("SELECT * FROM pets");

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 114.1</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

  <nav>
    <a href="index.php">Clientes</a>
    <a href="pets.php">Pets</a>
  </nav>

  <div class="caixa">
    <h3>
      Pets
    </h3>
    <br>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Espécie</th>
        <th>Raça</th>
        <th>Cor</th>
        <th>Idade</th>
        <th>Dono(a)</th>
        <th>Telemóvel</th>
      </tr>

      <?php foreach($pets as $p): ?>

        <?php $ce = select_sql_unico("SELECT nome,apelido,telemovel FROM clientes WHERE id=$p[cliente_id]"); ?>

        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?></td>
          <td><?= $p["especie"] ?></td>
          <td><?= $p["raca"] ?></td>
          <td><?= $p["cor"] ?></td>
          <td><?= $p["idade"] ?></td>
          <td><?= $ce["nome"] ?> <?= $ce["apelido"] ?></td>
          <td><?= $ce["telemovel"] ?></td>
        </tr>

      <?php endforeach ?>

    </table>
  </div>

</body>
</html>