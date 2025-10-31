<?php
require_once "helpers/base_dados_helper.php";

idu_sql("INSERT INTO produtos (nome, preco, codigo, fornecedor, stock) VALUES ('Caneta Roxa', 1.99, '020', 'FNAC', 42)");

$produtos = select_sql("SELECT * FROM produtos");


?>

<pre><?php print_r($produtos) ?></pre>
