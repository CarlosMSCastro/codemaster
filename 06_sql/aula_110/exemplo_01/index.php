<?php

require_once "helpers/base_dados_helper.php";

$produtos = select_sql("SELECT * FROM produtos WHERE nome LIKE '%monitor%'");

?>

<pre> <?php print_r($produtos)?> </pre>

