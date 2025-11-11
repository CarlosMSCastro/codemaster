<?php

session_start();

function fazer_login($login, $senha){
  $colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");

  if(!empty($colaborador)){
    session_start();
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