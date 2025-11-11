<?php

$bd = [
  "host" => "localhost",
  "dbname" => "codemaster_15_bd",
  "user" => "root",
  "pass" => "",
];

$pdo = new PDO("mysql:host=$bd[host];dbname=$bd[dbname];charset=utf8mb4;", "$bd[user]", "$bd[pass]");

function select_sql($sql, $parametros = []){
  global $pdo;
  //$consulta = $pdo->query($sql);
  $consulta = $pdo->prepare($sql);
  $consulta->execute($parametros);
  $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
  return $resultado;
}

function select_sql_unico($sql, $parametros = []){
  global $pdo;
  //$consulta = $pdo->query($sql);
  $consulta = $pdo->prepare($sql);
  $consulta->execute($parametros);
  $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
  return $resultado;
}

function idu_sql($sql, $parametros = []){
  global $pdo;
  //$consulta = $pdo->query($sql);
  $consulta = $pdo->prepare($sql);
  $consulta->execute($parametros);
}


?>