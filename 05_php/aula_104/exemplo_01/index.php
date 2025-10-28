<?php
require_once "classes/Cliente.php";

$c1 = new Cliente("Carlos","Fradelos","911074815");

echo "<h1>$c1->nome</h1>";
echo "<h1>".$c1->get_morada()."</h1>"; //dps da virgula?
echo "<h1>".$c1->get_cartao()."</h1>";


echo "<hr>";

$c1->nome ="Cristiano Ronaldo";
echo "<h1>$c1->nome</h1>";

$c1->set_morada("lisboa");
echo "<h1>".$c1->get_morada()."</h1>";

?>