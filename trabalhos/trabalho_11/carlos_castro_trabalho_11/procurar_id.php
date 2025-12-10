<?php
require_once "bootstrap.php";
verificar_login();
$pagina = "procurar_id";

$erro = "";
$mensagem = "";
$resultado = null;

if (!empty($_POST)) {

  $id = $_POST["id"] ?? "";

  if ($id === "") {
    $erro = "Introduza um ID.";
  } else {
    $resultado = select_sql_unico("SELECT * FROM produtos WHERE id = ?", [$id]);

    if (empty($resultado)) {
      $mensagem = "Produto ($id) não encontrado.";
    }
  }
}
?>

<?php require_once "components/header.php"; ?>

<div class="caixa">
  <h2>Pesquisar Produto por ID</h2>

  <form method="POST">
    <input type="number" name="id" placeholder="Código" required>
    <br><br>
    <button type="submit">Pesquisar</button>
  </form>
  <br>
  <a href="procurar_id.php">
    <button type="button">Reset</button>
  </a>
  <br>

  <?php if (!empty($erro)): ?>
    <p style="color:red;"><?php echo $erro; ?></p>
  <?php endif; ?>

  <?php if (!empty($mensagem)): ?>
    <p style="color:green;"><?php echo $mensagem; ?></p>
  <?php endif; ?>

  <?php if (!empty($resultado)): ?>
    <table class="tabela" style="margin-top:20px;">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço (€)</th>
        <th>Stock</th>
      </tr>
      <tr>
        <td><?php echo $resultado["id"]; ?></td>
        <td><?php echo $resultado["nome"]; ?></td>
        <td><?php echo number_format($resultado["preco"], 2, ',', ' '); ?></td>
        <td><?php echo $resultado["stock"]; ?></td>
      </tr>
    </table>

  <?php endif; ?>

</div>

<?php require_once "components/footer.php"; ?>