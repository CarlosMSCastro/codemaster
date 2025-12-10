<?php
require_once "bootstrap.php";
verificar_login();

$pagina = "registar_venda";

$mostrar_tabela = false;
$mostrar_venda = false;
$mostrar_mensagem = false;

$produto = null;
$mensagem = "";
$erro = "";

if (!empty($_POST)) {
  $id = $_POST["id"];
  $quantidade = $_POST["quantidade"];

  $produto = select_sql_unico("SELECT * FROM produtos WHERE id=?", [$id]);

  if ($quantidade <= 0) {
    $erro = "Quantidade inválida.";
    $mostrar_venda = true;
  }
  else if ($quantidade > $produto["stock"]) {
    $erro = "Quantidade superior ao stock disponível.";
    $mostrar_venda = true;
  }
  else {
    idu_sql("UPDATE produtos SET stock = stock - ? WHERE id=?",[$quantidade, $id]);

    $produtos = select_sql("SELECT * FROM produtos ORDER BY id ASC");
    $mostrar_tabela = true;
  }
}

else if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $produto = select_sql_unico("SELECT * FROM produtos WHERE id=?", [$id]);

  if (!empty($produto)) {
    $mostrar_venda = true;
  } else {
    $mensagem = "Produto ($id) não encontrado.";
    $mostrar_mensagem = true;
  }
}

else {
  $produtos = select_sql("SELECT * FROM produtos ORDER BY id ASC");
  $mostrar_tabela = true;
}
?>

<?php require_once "components/header.php"; ?>

<div class="caixa">

<?php if ($mostrar_tabela): ?>
  <h3>Registar Venda</h3>

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
        <a href="registar_venda.php?id=<?= $p["id"]; ?>">
          <button type="button">Vender</button>
        </a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>

<?php if ($mostrar_venda): ?>
  <h3>Registar Venda</h3>

  <?php if (!empty($erro)): ?>
    <p style="color:red;"><?= $erro; ?></p>
  <?php endif; ?>

  <form method="POST">
    <table class="tabela tabela-editar">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço (€)</th>
        <th>Stock</th>
        <th>Ação</th>
      </tr>
      <tr>
        <td><?= $produto["id"]; ?></td>
        <td><?= $produto["nome"]; ?></td>
        <td><?= number_format($produto["preco"], 2, ',', ' '); ?></td>
        <td><?= $produto["stock"]; ?></td>
        <td>
          <input type="number" name="quantidade" required>
        </td>
      </tr>
    </table>

    <input type="hidden" name="id" value="<?= $produto["id"]; ?>">

    <br>
    <button type="submit">Vender</button>
    <a href="registar_venda.php">
      <button type="button">Cancelar</button>
    </a>
  </form>
<?php endif; ?>

<?php if ($mostrar_mensagem): ?>
    <p style="color:green;"><?= $mensagem; ?></p>

    <a href="registar_venda.php">
      <button type="button">Voltar</button>
    </a>
<?php endif; ?>

</div>

<?php require_once "components/footer.php"; ?>
