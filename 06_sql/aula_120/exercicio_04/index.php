<?php

//No momento de criar um user
$senha = "code";
$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

//Validação da senha
if(password_verify("code". $senha_crip)){
  echo "CORRETO!";
}
else{
  echo "ERRADO!";
}

?>

