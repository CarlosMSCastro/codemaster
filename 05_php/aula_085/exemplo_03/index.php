<?php

/*
print("=== INÍCIO ===\n")
print("Olhar a carteira.")

resposta = "sim"

if(resposta == "sim"):
  print ("Ir ao restaurante")
  print ("Comer")

else:
  print("Ficar em casa")
  print("Assistir algo")

print("\n=== Fim ===")
*/



echo "<h1>=== INÍCIO === </h1>";
echo "<h2>Olhar a carteira.</h2>";

$resposta = "sim";

if($resposta == "sim"){
  echo "<h2 style='color: green;'>Ir ao restaurante.</h2>";
  echo "<h2 style='color: green;'>Comer.</h2>";
}
else{
  echo "<h2 style='color: red;'>Ficar em casa.</h2>";
  echo "<h2 style='color: red;'>Assistir algo.</h2>";
}


echo "<h1>=== FIM ===</h1>";

?>