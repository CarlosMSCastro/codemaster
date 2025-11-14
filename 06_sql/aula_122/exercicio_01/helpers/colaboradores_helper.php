<?php

session_start();


function fazer_login_cript($login, $senha){
  $colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE login=?", [$login]);
  if(!empty($colaborador) && password_verify($senha, $colaborador["senha_cript"])){
    $_SESSION["colaborador"] = $colaborador;
    idu_sql("UPDATE colaboradores SET data_ultimo_acesso_melhorado=NOW() WHERE id=?", [$colaborador["id"]]);
    idu_sql("INSERT INTO acessos (colaborador_id) VALUES (?)", [$colaborador["id"]]);
    header("Location: home.php");
  }
}

function verificar_logado(){
  global $colaborador;
  if(!empty($_SESSION["colaborador"])){
    $colaborador = $_SESSION["colaborador"];
  }
  else{
    header("Location: index.php");
  }
}

function verificar_admin(){
  global $colaborador;
  if(!$colaborador["admin"]){
    header("Location: home.php");
  }
}

function logout(){
  session_destroy();
  header("Location: index.php");
}

?>