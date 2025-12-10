<?php
require_once "bootstrap.php";
verificar_login();

$pagina = "editar_produtos";


$mostrar_tabela = false;
$mostrar_form = false;
$mostrar_mensagem = false;

$produto = null;
$mensagem = "";

if(!empty($_POST)){
  $id = $_POST["id"];
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];
  $stock = $_POST["stock"];

  idu_sql("UPDATE produtos SET nome=?, preco=?, stock=? WHERE id=?",[$nome, $preco, $stock, $id]);
  $mensagem = "Produto atualizado com sucesso!";
  $mostrar_mensagem = true;
}
else if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $produto = select_sql_unico("SELECT * FROM produtos WHERE id=?", [$id]);
  if (!empty($produto)) {
    $mostrar_form = true;
  } else {
    $mensagem = "Produto ($id) não encontrado.";
    $mostrar_mensagem = true;
  }
}

else{
  $produtos = select_sql("SELECT * FROM produtos ORDER BY id ASC");
  $mostrar_tabela = true;
}
?>

<?php require_once "components/header.php"; ?>

<div class="caixa">
  

  <?php if ($mostrar_tabela): ?>
    <h3>Editar Produto</h3>
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
        <td><?php echo $p["id"]; ?></td>
        <td><?php echo $p["nome"]; ?></td>
        <td><?php echo number_format($p["preco"], 2, ',', ' '); ?></td>
        <td><?php echo $p["stock"]; ?></td>
        <td>
        <a href="editar_produtos.php?id=<?php echo $p["id"]; ?>">
          <button type="button">Editar</button>
        </a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>

  <?php endif; ?>

  <?php if ($mostrar_form): ?>
    <h3>Editar Produto (<?php echo $produto["id"]; ?> )</h3>
    <form method="POST" class="editar-form">

      <input type="hidden" name="id" value="<?php echo $produto["id"]; ?>">
      Nome:
      <input type="text" name="nome" value="<?php echo $produto["nome"]; ?>" required>
      <br><br>

      Preço:
      <input type="number" step="0.01" min="0.01" name="preco" value="<?php echo $produto["preco"]; ?>" required>
      <br><br>

      Stock:
      <input type="number" name="stock" value="<?php echo $produto["stock"]; ?>" required>
      <br><br>

      <button type="submit">Guardar Alterações</button>

    </form>

  <?php endif; ?>

  <?php if ($mostrar_mensagem): ?>

    <p style="color:green;"><?php echo $mensagem; ?></p>

    <a href="editar_produtos.php">
      <button type="button">Voltar</button>
    </a>

  <?php endif; ?>

  </div>

<?php require_once "components/footer.php"; ?>