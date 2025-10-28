<?php

/*
print("=== INÍCIO ===\n")
print("Olhar a carteira.")

valor = 12.50

if(valor <=20):
  print("Ficar em casa")
  print("Assistir algo")

elif(valor > 20 and valor < 40):
  print("Ir ao shopping.")
  print("Comer fast-food.")

else:
  print("Ir á praia.")
  print("Comer num restaurante.")

print("\n=== Fim ===")
*/

echo "<h1>=== INÍCIO === </h1>";
echo "<h2>Olhar Carteira.</h2>";

$valor = 42;

if($valor <=20){
  echo "<h2 style='color: green;'>Ficar em casa.</h2>";
  echo "<h2 style='color: green;'>Netflix.</h2>";
}
elseif($valor <40){
  echo "<h2 style='color: blue;'>Ir ao shopping.</h2>";
  echo "<h2 style='color: blue;'>Comer fast food.</h2>";
}
else{
  echo "<h2 style='color: red;'>Ir á praia.</h2>";
  echo "<h2 style='color: red;'>Comer camarão.</h2>";
}

echo "<h1>=== FIM ===</h1>";

?>