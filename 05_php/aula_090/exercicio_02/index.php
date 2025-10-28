<?php
require_once("funcoes.php");


$moeda = "";
$form = !empty($_GET["moeda"]);
if($form){
  $moeda = $_GET["moeda"];
}
$valor = $_GET["valor"]?? null;

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 90-Ex.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Conversor Monetário</h1>

  <div class="caixa">
    <form action="">
      <h2>Valor em Euros</h2>
      <input type="number" id="valor" name="valor" step="any" value="<?php echo $valor; ?>">
      <h2>Converter para</h2>
      <label for="dolar">Dólar</label>
      <label for="libra">libra</label>
      <label for="real">real</label>
      <label for="yen">yen</label><br>
      <input type="radio" id="dolar" name="moeda" value="dolar"<?= ($moeda == "dolar") ? "checked" : "" ?>>
      <input type="radio" id="libra" name="moeda" value="libra" <?= ($moeda == "libra") ? "checked" : "" ?>>
      <input type="radio" id="real" name="moeda" value="real" <?= ($moeda == "real") ? "checked" : "" ?>>
      <input type="radio" id="yen" name="moeda" value="yen" <?= ($moeda == "yen") ? "checked" : "" ?>><br>
      <input type="submit" value="CALCULAR!">
    </form>
  </div>
  <br><br>
<?php if ($form): ?>
    <?php if (!empty($valor)): ?>
        <div class="caixa">
            <?php switch($moeda):
                case "dolar":
                    $resultado = euroParaDolar($valor); ?>
                    <h2><?= $valor ?> € = <?= number_format($resultado, 2) ?> Dólares</h2>
                <?php break; ?>

                <?php case "libra":
                    $resultado = euroParaLibra($valor); ?>
                    <h2><?= $valor ?> € = <?= number_format($resultado, 2) ?> Libras</h2>
                <?php break; ?>

                <?php case "real":
                    $resultado = euroParaReal($valor); ?>
                    <h2><?= $valor ?> € = <?= number_format($resultado, 2) ?> Reais</h2>
                <?php break; ?>

                <?php case "yen":
                    $resultado = euroParaYen($valor); ?>
                    <h2><?= $valor ?> € = <?= number_format($resultado, 2) ?> Yen</h2>
                <?php break; ?>
            <?php endswitch; ?>
            <a href="index.php">
              <input type="button" value="RESET">
            </a>
        </div>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>