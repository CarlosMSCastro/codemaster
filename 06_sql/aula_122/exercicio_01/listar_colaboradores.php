<?php

require_once "bootstrap.php";

verificar_logado();
verificar_admin();

$colaboradores = select_sql("SELECT * FROM colaboradores ORDER BY id DESC");



?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 120.1</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <h1>Home</h1>

  <h3>Bem-vindo <?= $colaborador["nome"] ?></h3>
  <?php if(!empty($colaborador["data_ultimo_acesso_melhorado"])): ?>
    <h3>
      Data do último acesso: ( <?= date("H:i:s - d/m/Y", strtotime($colaborador["data_ultimo_acesso_melhorado"])) ?> )
    </h3>
  <?php endif ?>

  <nav>
    <?php if($colaborador["admin"]): ?>
      <a href="criar_colaborador.php">Criar Colaborador</a>
      <a href="lista_colaborador.php">Lista de Colaboradores</a>
    <?php endif ?>

    <a href="sair.php">Sair</a>
  </nav>

  <div class="caixa">
    <h3>
      Colaboradores
    </h3>
    <br>
    <table>
      <tr>
        <th>ID</th>
        <th>Admin</th>
        <th>Nome</th>
        <th>NIF</th>
        <th>Morada</th>
        <th>Idade</th>
        <th>Login</th>
        <th>Data Ultimo Acesso</th>
        <th>Criador</th>
        <th>Data Criação</th>
        <th>Ações</th>
      </tr>

      <?php foreach($colaboradores as $p): ?>

        <?php $c = select_sql_unico("SELECT nome,apelido FROM colaboradores WHERE id=?", [$p["criador"]]); ?>

        <tr>
          <td><?= $p["id"] ?></td>
          <td><?= $p["admin"] ?></td>
          <td><?= $p["nome"] ?> <?= $p["apelido"] ?></td>
          <td><?= $p["nif"] ?></td>
          <td><?= $p["morada"] ?></td>
          <td><?= $p["idade"] ?></td>
          <td><?= $p["login"] ?></td>
          <td><?= $p["data_ultimo_acesso_melhorado"] ?></td>
          <td><?= $c["nome"] ?> <?= $c["apelido"] ?></td>
          <td><?= $p["data_criacao"] ?></td>
          <td>
            <a href="historico.php?id=<?= $p["id"] ?>">
              <button>Historico</button>
            </a>
          </td>
        </tr>

      <?php endforeach ?>

    </table>
  </div>


</body>
</html>