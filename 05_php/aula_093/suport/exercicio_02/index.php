<?php

// loop = 1
// while(loop <= 10):
//   print(loop)
//   loop += 1

$loop = 1;
while($loop <= 5){
  echo "<h1>" . $loop++ . "</h1>";
}

echo "<hr>";

$loop = 5;
while($loop >= 1){
  echo "<h1>" . $loop-- . "</h1>";
}

echo "<hr>";

// for i in range(1,6):
//   print(i)

for($i = 1; $i <= 5; $i++){
  echo "<h1>$i</h1>";
}

?>