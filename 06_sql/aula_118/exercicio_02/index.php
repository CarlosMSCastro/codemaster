<?php

require_once "helpers/base_dados_helper.php";

$form = !empty($_GET["nome"]) && !empty($_GET["especie"]) && !empty($_GET["raca"]) && !empty($_GET["cor"]) && !empty($_GET["idade"]) && !empty($_GET["cliente_id"]);
if($form){
  $nome = $_GET["nome"];
  $especie = $_GET["especie"];
  $raca = $_GET["raca"];
  $cor = $_GET["cor"];
  $idade = $_GET["idade"];
  $cliente_id = $_GET["cliente_id"];
  idu_sql("INSERT INTO pets (nome, especie, raca, cor, idade, cliente_id) VALUES ('$nome', '$especie', '$raca', '$cor', '$idade', '$cliente_id')");
  header("Location: index.php");
}

$pets = select_sql("SELECT * FROM pets");
$clientes = select_sql("SELECT nome,apelido,id FROM clientes");

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

  <div class="caixa">
    <h3>Registar Pet</h3>
    <br>
    <form action="">
      <input type="text" name="nome" placeholder="Nome" required autofocus>
      <br><br>
      <select name="especie" required>
        <option value="">--- Espécie ---</option>
        <option value="Cão">Cão</option>
        <option value="Gato">Gato</option>
      </select>
      <br><br>
      <input type="text" name="raca" placeholder="Raça" required>
      <br><br>
      <input type="text" name="cor" placeholder="Cor" required>
      <br><br>
      <input type="number" name="idade" placeholder="Idade" min="0" required>
      <br><br>
      <!-- <input type="number" name="cliente_id" placeholder="Cliente ID" min="1" required> -->
       <select name="cliente_id" required>
        <option value="">--- Dono(a) ---</option>

          <?php foreach($clientes as $c): ?>

            <option value="<?= $c["id"] ?>"><?= $c["nome"] ?> <?= $c["apelido"] ?></option>

          <?php endforeach ?>

       </select>
      <br><br>
      <input type="submit" value="Registar">
    </form>
  </div>

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