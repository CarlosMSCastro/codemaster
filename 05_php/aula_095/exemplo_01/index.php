<?php


//alunos = ["fabricio","carlos","messi","ronaldo"]
//print (alunos[2])
//alunos[1] = "trezeguet"
//alunos.pop(1)
//alunos.append("Jorginho")
//alunos.insert(0, "Mario")
//print(len(alunos)) <- contar elementos no vetor alunos



$alunos = ["Fabricio","Carlos","Samu","Ronaldo"];
echo $alunos[2];

echo "<hr>";
$alunos[0] = "Crouch";
//array_pop($alunos);    <- apagar a ultima
array_splice($alunos, 0, 1);  // ARRAY_SPLICE paraapagar posiçao 0, 1 apartir dela (apagar só ela)

$alunos[] = "Jorginho";
$alunos[] = "Froholdt";  // para adicionar neste metodo tem que ser 1 de cada vez
array_push($alunos, "Buffon","Casillas"); //permite inserir diversos

array_splice($alunos, 0, 0, "Gabri Veiga"); // ARRAY_SPLICE para inserir numa posiçao
array_splice($alunos, 0, 2, ["Rodrigo Mora","Pablo Rosario","Diogo Costa"]); // ARRAY_SPLICE para apagar e inserir numa posiçao

var_dump($alunos);
echo "<br><br>";
print_r($alunos);
echo "<hr>";


echo "<pre>";
print_r($alunos);
echo "</pre>";
echo "<hr>";

echo "Numero de elementos no array com funçao count(): " . count($alunos);
echo "<br><br>";
echo "Numero de elementos no array com funçao sizeof(): " . sizeof($alunos);
echo "<hr>";

echo "<pre>";
print_r(array_reverse($alunos));
echo "</pre>";
echo "<hr>";

sort($alunos); // Deixar por ordem alfabética

echo "<pre>";
print_r($alunos);
echo "</pre>";
echo "<hr>";

rsort($alunos); // Deixar por ordem alfabética AO CONTRARIO do Z para A

echo "<pre>";
print_r($alunos);
echo "</pre>";
echo "<hr>";

echo $alunos[array_rand($alunos)]; //valor random do vetor alunos
echo "<hr>";

$teste = "Pão<br>Queijo<br>Bolo<br>Fiambre";
$novo_vetor = explode("<br>", $teste);   //passsar de string para vetor
echo "<pre>";
print_r($novo_vetor);
echo "</pre>";
echo "<hr>";

$texto = implode(", ", $alunos); //passsar de vetor para string
echo "<pre>";
print_r($texto); 
echo "</pre>";
echo "<hr>";


?>