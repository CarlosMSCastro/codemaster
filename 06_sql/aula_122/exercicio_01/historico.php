<?php

require_once "bootstrap.php";

verificar_logado();
verificar_admin();

$form = !empty($_GET["id"]);
if($form){
  $id = $_GET["id"];
  $acessos = select_sql("SELECT data FROM acessos WHERE colaborador_id=? ORDER BY data DESC", [$id]);
  $ce = select_sql_unico("SELECT nome,apelido FROM colaboradores WHERE id=?", [$id]);
}
else{
  header("Location: home.php");
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historico</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Historico</h1>
    <nav>
    <?php if($colaborador["admin"]): ?>
      <a href="criar_colaborador.php">Criar Colaborador</a>
      <a href="lista_colaborador.php">Lista de Colaboradores</a>
    <?php endif ?>

    <a href="sair.php">Sair</a>
  </nav>

  <div class="caixa">
    <h3>
      Acessos
    </h3>
    <br>
    <table>
      <tr>
        <th>Data</th>
      </tr>
      <?php foreach($acessos as $a): ?>
        <tr>
          <td><?= date("H:i:s - d/m/Y", strtotime($a["data"])) ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</body>
</html>