<?php

require_once "helpers/base_dados_helper.php";

$produtos = select_sql("SELECT * FROM produtos");
$clientes = select_sql("SELECT * FROM clientes");
$colaboradores = select_sql("SELECT * FROM colaboradores");

?>

<pre>
  <?php print_r($produtos) ?>
</pre>
<pre>
  <?php print_r($clientes) ?>
</pre>
<pre>
  <?php print_r($colaboradores) ?>
</pre>