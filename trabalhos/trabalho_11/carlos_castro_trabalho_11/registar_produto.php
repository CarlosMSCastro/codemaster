<?php
require_once "bootstrap.php";
verificar_login();
$pagina = "registar_produto";
$erro = "";
$sucesso = "";

$form = !empty($_POST);
if ($form) {
  $nome = $_POST["nome"] ?? "";
  $preco = $_POST["preco"] ?? "";
  $stock = $_POST["stock"] ?? "";
  $existe = select_sql_unico("SELECT * FROM produtos WHERE nome = ?", [$nome]);
  if (!empty($existe)){
    $erro = "Produto já existe.";
  } else {
    idu_sql("INSERT INTO produtos (nome, preco, stock) VALUES (?, ?, ?)",[$nome, $preco, $stock]);
    $sucesso = "Produto registado com sucesso!";
  }
  
}
?>
<?php require_once "components/header.php"; ?>
<div class="caixa">
  <h2>Registar Produto</h2>
  <?php if (!empty($erro)): ?>
    <p style="color:red;"><?php echo $erro; ?></p>
  <?php endif; ?>

  <?php if (!empty($sucesso)): ?>
    <p style="color:green;"><?php echo $sucesso; ?></p>
  <?php endif; ?>
  <form method="POST">
    <input type="text" name="nome" placeholder="Nome do Produto" required>
    <br><br>

    <input type="number" step="0.01" name="preco" min="0.01" placeholder="Preço (€)" required>
    <br><br>

    <input type="number" name="stock" placeholder="Stock" required>
    <br><br>

    <button type="submit">Registar</button>
  </form>
</div>
<?php require_once "components/footer.php"; ?>


