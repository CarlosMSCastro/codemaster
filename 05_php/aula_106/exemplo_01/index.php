<?php

$bd = [
  "host"=>"localhost",
  "dbname" => "codemaster_bd",
  "user" => "root",
  "pass" =>"",
];

$pdo = new PDO("mysql:host=$bd[host];dbname=$bd[dbname];charset=utf8mb4;","$bd[user]","$bd[pass]");


$consulta = $pdo->query("SELECT * FROM produtos");
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($resultado);
echo "</pre>";



?>