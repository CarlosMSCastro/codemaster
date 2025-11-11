<?php

require_once "helpers/base_dados_helper.php";

$min = 5;
$max = 10;

//$produtos = select_sql("SELECT * FROM produtos WHERE preco BETWEEN ? AND ?", [$min, $max]);
$produtos = select_sql("SELECT * FROM produtos");

$nome = "Caneta Roxa";
$preco = 3.99;
$stock = 32;
$fornecedor = "Worten";
$codigo = "035";

//idu_sql("INSERT INTO produtos (nome, preco, stock, fornecedor, codigo) VALUES ('$nome', $preco, $stock, '$fornecedor', '$codigo'");
idu_sql("INSERT INTO produtos (nome, preco, stock, fornecedor, codigo) VALUES (?, ?, ?, ?, ?)", [$nome, $preco, $stock, $fornecedor, $codigo]);


?>

<pre><?php print_r($produtos) ?></pre>