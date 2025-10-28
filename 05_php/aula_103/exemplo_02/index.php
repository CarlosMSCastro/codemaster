<?php
require_once "classes/Pessoa.php";

//Pseudo-Construtuor

function nova_pessoa($nome, $peso, $altura, $idade){
  $dicionario =[
    "nome" => $nome,
    "peso" => $peso,
    "altura" => $altura,
    "idade" => $idade,
  ];
  return $dicionario;
}

function completar_anos(&$p){
  $p["idade"] += 1;
}
function get_imc($p){
  $imc = $p["peso"] / $p["altura"]**2;
  return $imc;
}


$p1 = nova_pessoa("Carlos", 68, 1.75, 28);
$p1["idade"] += 1;
$imc = $p1["peso"] / $p1["altura"]**2;

$p2 = new Pessoa("Rui",76, 1.78, 31);
$p2->completar_anos();
print_r($p2);


?>
