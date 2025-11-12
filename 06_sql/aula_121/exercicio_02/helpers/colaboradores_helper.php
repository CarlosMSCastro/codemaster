<?php

session_start();

function fazer_login($login, $senha){
  $colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE login=? AND senha=?", [$login, $senha]);
  if(!empty($colaborador)){
    $_SESSION["colaborador"] = $colaborador;
    date_default_timezone_set("Europe/Lisbon");
    $data = date("H:i:s - d/m/Y");
    idu_sql("UPDATE colaboradores SET data_ultimo_acesso=? WHERE id=?", [$data, $colaborador['id']]);
    header("Location: home.php");
  }
}

function fazer_login_cript($login, $senha){
  $colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE login=?", [$login]);
  if(!empty($colaborador) && password_verify($senha, $colaborador["senha_cript"])){
    date_default_timezone_set("Europe/Lisbon");
    $data = date("H:i:s - d/m/Y");
    idu_sql("UPDATE colaboradores SET data_ultimo_acesso=? WHERE id=?", [$data, $colaborador['id']]);
    $_SESSION["colaborador"] = $colaborador;
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