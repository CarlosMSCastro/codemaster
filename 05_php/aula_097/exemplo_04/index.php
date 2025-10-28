<?php

/*
alunos = ["fabricio","Carlos","karol"]
for i in range(len(alunos));
  print(f"{i+1} - {alunos[i]}")

for a in alunos:
  print(a)
*/



  //array
$alunos = ["fabricio","ana","jose"];
for ($i = 0; $i<count($alunos); $i++){
  echo ($i+1). " - " . $alunos[$i] . "<br>";
}

echo "<hr>";

for ($i = 0; $i<count($alunos); $i++){
  echo $alunos[$i] . "<br>";
}





?>