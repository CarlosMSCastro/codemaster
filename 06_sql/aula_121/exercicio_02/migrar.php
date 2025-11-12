<?php

require_once "bootstrap.php";

$colaboradores = select_sql("SELECT id,senha FROM colaboradores WHERE senha_cript IS NULL");

foreach($colaboradores as $c){
  $senha_cript = password_hash($c["senha"], PASSWORD_DEFAULT);
  idu_sql("UPDATE colaboradores SET senha_cript=? WHERE id=?", [$senha_cript]);
}

?>