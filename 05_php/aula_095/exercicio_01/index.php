



<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 95-Ex.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Array Original</h2>
<pre>
<?php

$objetos = ["Mesa","Cadeira","Papel A4","Caneta Azul","Bolsa Vermelha","X-Acto","Xbox","Borracha"];
print_r($objetos);
?>
</pre>

<hr>
<h2>Contar o total de elementos</h2>
<?= count($objetos);?>
<hr>
<h2>Adicionar novo elemento</h2>
<?php $objetos[]="Lápis Verde";?>
<pre>
<?php print_r($objetos);?>
</pre>
<hr>
<h2>Remover Ultimo elemento</h2>
<?php array_pop($objetos);?>
<pre>
<?php print_r($objetos);?>
</pre>
<hr>
<h2>Inverso do original</h2>
<pre>
<?php print_r(array_reverse($objetos));?>
</pre>
<hr>
<h2>Ordenar na ordem crescente</h2>
<pre>
<?php
 $crescente = ($objetos);
 sort($crescente);
 print_r($crescente);
 ?>
</pre>
<hr>
<h2>Ordenar na ordem decrescente</h2>
<pre>
<?php
  $decrescente = ($objetos);
  rsort($decrescente);
  print_r($decrescente);
 ?>
</pre>
<hr>
<h2>Retornar elemento aleatório do array</h2>
<?= $objetos[array_rand($decrescente)]; ?>
<hr>
<h2>Remove elemento de Posição específica (3)</h2>
<pre>
<?php 
  array_splice($decrescente, 3, 1); 
  print_r($decrescente);
?>
</pre>
<hr>
<h2>Adiciona um elemento de Posição específica (1) (caderno)</h2>
<pre>
<?php 
  array_splice($decrescente, 1, 0, "Caderno"); 
  print_r($decrescente);
?>
</pre>
<hr>
<h2>Transformar array em string</h2>
<?php 
  $decrescente = implode(" - ",$decrescente);
  print_r($decrescente);
?>
<hr>
<hr>
<h2>Transformar string em array</h2>




</body>


</html>