<?php

require_once "helpers/base_dados_helper.php";

$login = "fabricio";
$senha = "code";

$colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");

if(!empty($colaborador)){
  echo "<h1 style='color: green;'>SUCESSO!</h1>";
}
else{
  echo "<h1 style='color: red;'>LOGIN INVÁLIDO!</h1>";
}

?>
