<?php

require_once "helpers/base_dados_helper.php";

idu_sql("UPDATE produtos SET nome='Caneta Rosa', fornecedor='Worten', preco=1.50 WHERE id=22");

$produtos = select_sql("SELECT * FROM produtos ORDER BY id DESC");

?>

<pre><?php print_r($produtos) ?></pre>