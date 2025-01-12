<?php

date_default_timezone_set('Europe/Lisbon');

require_once("data_base.php");

function user_login ($login, $senha) {
  $usuario = selectSQLUnique("SELECT * FROM colaboradores WHERE login='$login' AND pw='$senha'");

  if(!empty($usuario)) {    
    session_start();
    $_SESSION["usuario"] = $usuario;
    $data_atual = date("H:i:s - d/m/y");
    iduSQL("UPDATE colaboradores SET last_acess_date='$data_atual' WHERE id=$usuario[id]");
    return true;    
  }

  else {
    return false;
  };
}

function check_login () {
  session_start();
  if(!empty($_SESSION["usuario"])) {
    return $_SESSION["usuario"];
  }
  else {
    return false;
  }
}

function logout() {
  session_start();
  session_destroy();
}

?>