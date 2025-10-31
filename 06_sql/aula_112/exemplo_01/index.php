<?php
require_once "helpers/base_dados_helper.php";

$produto = select_sql("SELECT * FROM produtos WHERE fornecedor IN ('fnac', 'pc diga','worten')");

$produto2 = select_sql("SELECT * FROM produtos WHERE fornecedor  NOT IN ('fnac', 'pc diga','worten')");



?>

<pre><?php print_r($produto) ?> </pre>
<hr>
<pre><?php print_r($produto2) ?> </pre>