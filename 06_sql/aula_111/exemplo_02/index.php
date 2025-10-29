<?php

require_once "helpers/base_dados_helper.php";


$total = select_sql_unico("SELECT Count(*) FROM produtos")["Count(*)"];
$min = select_sql_unico("SELECT Min(preco) FROM produtos")["Min(preco)"];
$max = select_sql_unico("SELECT Max(preco) FROM produtos")["Max(preco)"];
$soma = select_sql_unico("SELECT Sum(preco) FROM produtos")["Sum(preco)"];
$avg = number_format(select_sql_unico("SELECT Avg(preco) FROM produtos")["Avg(preco)"],2, ',','');



echo "<h1>$total</h1>";
echo "<h1>$min</h1>";
echo "<h1>$max</h1>";
echo "<h1>$soma</h1>";
echo "<h1>$avg</h1>";


?>



