<?php

function get_dobro($numero){
  $dobro = $numero * 2;
  echo "<h1>$dobro</h1>";
}


function calc_imc($peso,$altura){
  $imc = $peso / $altura **2;
  echo "<h1>IMC: (".number_format($imc,1).")</h1>";
}

function saudar (){
  echo "<h1>Boa Noite!</h1>";
}

function saudar_2($nome){
  echo "<h1>Boa Noite $nome!</h1>";
}

function get_desconto($valor_original){
  $valor_descontado = $valor_original * 0.9;
  echo "<h1>".number_format($valor_descontado, 2)." €</h1>";
}

function get_desconto_2($valor_original){
  $valor_descontado = $valor_original * 0.9;
  return $valor_descontado;
  
}

?>