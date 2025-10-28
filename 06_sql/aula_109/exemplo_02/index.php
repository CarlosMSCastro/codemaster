<?php

require_once "helpers/base_dados_helper.php";

$p1 = select_sql("SELECT * FROM produtos WHERE id=3");
$p2 = select_sql_unico("SELECT * FROM produtos WHERE id=3");

echo $p1[0]["nome"]. "<br>";
echo $p2["nome"]. "<br>";

?>

<pre><?php print_r($p1); ?></pre>
<pre><?php print_r($p2); ?></pre>
