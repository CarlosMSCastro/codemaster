<?php

require_once "helpers/base_dados_helper.php";

$clientes = select_sql("SELECT * FROM clientes");

$form = !empty($_GET["id"]);
if($form){
  $id = $_GET["id"];
  // idu_sql("DELETE FROM pets WHERE cliente_id=$id");
  idu_sql("DELETE FROM clientes WHERE id=$id");
  header("Location: index.php");
}

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
      Clientes
    </h3>
    <br>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Morada</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
      </tr>

      <?php foreach($clientes as $p): ?>

        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["nome"] ?> <?= $p["apelido"] ?></td>
          <td><?= $p["idade"] ?></td>
          <td><?= $p["morada"] ?></td>
          <td><?= $p["email"] ?></td>
          <td><?= $p["telemovel"] ?></td>
          <td>
            <a href="index.php?id=<?= $p["id"] ?>">
              <button class="apagar">X</button>
            </a>
          </td>
        </tr>

      <?php endforeach ?>

    </table>
  </div>

</body>
</html>