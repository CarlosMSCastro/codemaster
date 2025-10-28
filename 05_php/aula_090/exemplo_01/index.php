<?php

$cor = "verde";

//if($cor == "branca"){
//  echo "<h1>Voce escolheu Branca!</h1>";
//}
//elseif($cor == "preta"){
//  echo "<h1>Voce escolheu PRETA!</h1>";
//}
//elseif($cor == "vermelha"){
//  echo "<h1>Voce escolheu VERMELHA!</h1>";
//}
//elseif($cor == "verde"){
//  echo "<h1>Voce escolheu VERDE!</h1>";
//}
//else{
//  echo "<h1>--- OPÇÃO INVÁLIDA ---</h1>";
//}

switch($cor){
  case "branca":
    echo "<h1>Voce escolheu Branca!</h1>";
    break;
  case "preta":
    echo "<h1>Voce escolheu Preta!</h1>";
    break;
  case "vermelha":
    echo "<h1>Voce escolheu Vermelha!</h1>";
    break;
  case "verde":
    echo "<h1>Voce escolheu Verde!</h1>";
    break;
  default:
    echo "<h1>--- OPÇÃO INVÁLIDA ---</h1>";
    break;
}

?>