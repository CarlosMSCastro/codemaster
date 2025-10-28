<?php

$loop = 1;
while($loop <=10){
  echo "<h1>" . $loop++ . "</h1>"; //em vez de loop += 1
}  

echo "<hr>";

$loop = 5;
while($loop >=1){
  echo "<h1>" . $loop-- . "</h1>"; //em vez de loop += 1
}  

echo "<hr>";

for($i = 0; $i <= 5; $i++){
  echo "<h1>$i</h1>";
}


?>

