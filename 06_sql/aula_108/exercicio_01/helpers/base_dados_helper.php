<?php

$bd = [
  "host"=>"localhost",
  "dbname" => "codemaster_bd",
  "user" => "root",
  "pass" =>"",
];

$pdo = new PDO("mysql:host=$bd[host];dbname=$bd[dbname];charset=utf8mb4;","$bd[user]","$bd[pass]");


function select_sql($sql){
  global $pdo;
  $consulta = $pdo->query($sql);
  $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
  return $resultado;
}


?>