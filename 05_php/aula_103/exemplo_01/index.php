<?php
require_once "classes/Produto.php";

function novo_produto($nome, $preco, $fornecedor){
  $dicionario = [
    "nome" => $nome,
    "preco" => $preco,
    "fornecedor" => $fornecedor,
  ];
  return $dicionario;
}

$p1 = novo_produto("Caderno Azul", 2.99, "Papel PT");
echo $p1["nome"] . "<br>";
$p1["preco"] = 3.50;
print_r($p1);

echo "<hr>";

$p2 = new Produto("Mesa Branca", 19.95, "IKEA");
echo $p2->nome . "<br>";
$p2->preco = 15.00;
print_r($p2);

?>