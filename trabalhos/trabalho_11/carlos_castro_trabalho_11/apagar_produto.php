<?php
require_once "bootstrap.php";
verificar_login();

$pagina = "apagar_produto";

$mostrar_tabela = false;
$mostrar_confirmacao = false;
$mostrar_mensagem = false;

$produto = null;
$mensagem = "";

if (!empty($_POST)) {
  $id = $_POST["id"];

  idu_sql("DELETE FROM produtos WHERE id=?", [$id]);

  $mensagem = "Produto apagado com sucesso!";
  $mostrar_mensagem = true;
}

else if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $produto = select_sql_unico("SELECT * FROM produtos WHERE id=?", [$id]);

  if (!empty($produto)) {
    $mostrar_confirmacao = true;
  } else {
    $mensagem = "Produto ($id) não encontrado.";
    $mostrar_mensagem = true;
  }
}

// LISTAGEM NORMAL
else {
  $produtos = select_sql("SELECT * FROM produtos ORDER BY id ASC");
  $mostrar_tabela = true;
}
?>

<?php require_once "components/header.php"; ?>

<div class="caixa">

<?php if ($mostrar_tabela): ?>
  <h3>Apagar Produto</h3>

  <table class="tabela tabela-editar">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço (€)</th>
      <th>Stock</th>
      <th>Ação</th>
    </tr>

    <?php foreach ($produtos as $p): ?>
    <tr>
      <td><?= $p["id"]; ?></td>
      <td><?= $p["nome"]; ?></td>
      <td><?= number_format($p["preco"], 2, ',', ' '); ?></td>
      <td><?= $p["stock"]; ?></td>
      <td>
        <a href="apagar_produto.php?id=<?= $p["id"]; ?>">
          <button type="button">Apagar</button>
        </a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>

<?php if ($mostrar_confirmacao): ?>
  <h3>Confirmar Apagar</h3>

  <p>
    Tem a certeza que deseja apagar o produto (<?= $produto["id"]; ?>)<br>
  </p>

  <form method="POST">
    <input type="hidden" name="id" value="<?= $produto["id"]; ?>">

    <button type="submit">Sim, apagar</button>
    <br><br>
    <a href="apagar_produto.php">
      <button type="button">Cancelar</button>
    </a>
  </form>
<?php endif; ?>

<?php if ($mostrar_mensagem): ?>
  <p style="color:green;"><?= $mensagem; ?></p>

  <a href="apagar_produto.php">
    <button type="button">Voltar</button>
  </a>
<?php endif; ?>

</div>

<?php require_once "components/footer.php"; ?>
