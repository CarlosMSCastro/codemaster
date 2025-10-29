<?php

require_once "helpers/base_dados_helper.php";

$produtos = select_sql("SELECT * FROM produtos WHERE fornecedor='PC Diga' ORDER BY preco ASC LIMIT 3");

?>

<pre> <?php print_r($produtos)?> </pre>

