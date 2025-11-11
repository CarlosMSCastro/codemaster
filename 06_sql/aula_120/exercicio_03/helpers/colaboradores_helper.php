<?php

session_start();

function fazer_login($login, $senha){
 // $colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");
  $colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE login=? AND senha=?", [$login, $senha]);

  if(!empty($colaborador)){
    $_SESSION["colaborador"] = $colaborador;
    date_default_timezone_set("Europe/Lisbon");
    $data = date("H:i:s - d/m/Y");
    idu_sql("UPDATE colaboradores SET data_ultimo_acesso=? WHERE id=?", [$data, $colaborador['id']]);
    header("Location: home.php");
  }
}

function verificar_login(){
  global $colaborador;
  if(!empty($_SESSION["colaborador"])){
    $colaborador = $_SESSION["colaborador"];
  }
  else{
    header("Location: index.php");
  }
}

function logout(){
  session_destroy();
  header("Location: index.php");
}


?>