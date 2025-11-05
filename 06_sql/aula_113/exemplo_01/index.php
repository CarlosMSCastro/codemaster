<?php
require_once "helpers/base_dados_helper.php";

//idu_sql("DELETE FROM produtos");


$produtos = select_sql("SELECT * FROM produtos ORDER BY id DESC");

?>

<pre><?php print_r($produtos) ?></pre>


