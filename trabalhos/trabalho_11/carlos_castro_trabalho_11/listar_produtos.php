<?php
require_once "bootstrap.php";
verificar_login();

$pagina = "listar_produtos";
$colunas_validas = ["id", "nome", "preco", "stock"];
$sentidos_validos = ["ASC", "DESC"];
$listagem_feita = !empty($_GET);


$coluna = $_GET["coluna"] ?? "id";
if($coluna !== "id" && $coluna !== "nome" && $coluna !== "preco" && $coluna !== "stock"){
  $coluna = "id";
}
$sentido = $_GET["sentido"] ?? "ASC";

if($sentido !== "ASC" && $sentido !== "DESC"){
  $sentido = "ASC";
}

$sql = "SELECT * FROM produtos ORDER BY $coluna $sentido";
$produtos = select_sql($sql);
?>

<?php require_once "components/header.php"; ?>

<div class="caixa">
  <h3>Ordem da lista</h3>
  <br>
  <form method="GET">
    <label>Coluna:</label>
    <select name="coluna">
      <option value="id"    <?php if($coluna=="id")    echo "selected"; ?>>ID</option>
      <option value="nome"  <?php if($coluna=="nome")  echo "selected"; ?>>Nome</option>
      <option value="preco" <?php if($coluna=="preco") echo "selected"; ?>>Preço</option>
      <option value="stock" <?php if($coluna=="stock") echo "selected"; ?>>Stock</option>
    </select>

    <br>
    <div class="sentidos">

    <label>
      Ascendente
      <input type="radio" name="sentido" value="ASC" <?php if($sentido=="ASC") echo "checked"; ?>>
    </label>

    <label>
      Descendente
      <input type="radio" name="sentido" value="DESC" <?php if($sentido=="DESC") echo "checked"; ?>>
    </label>
    </div>

    <br>

    <button type="submit">Ordenar</button>

    <br><br>

    <?php if ($listagem_feita): ?>
      <a href="listar_produtos.php">
        <button type="button">Reset</button>
      </a>

    <?php endif; ?>

  </form>


  <br>
  <table class="tabela">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço (€)</th>
      <th>Stock</th>
    </tr>

    <?php foreach ($produtos as $p): ?>
    <tr>
      <td><?php echo $p["id"]; ?></td>
      <td><?php echo $p["nome"]; ?></td>
      <td><?php echo number_format($p["preco"], 2, ',', ' '); ?></td>
      <td><?php echo $p["stock"]; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>

</div>

<?php require_once "components/footer.php"; ?>