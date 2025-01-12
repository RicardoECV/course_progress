<?php

date_default_timezone_set('Europe/Lisbon');

require_once("data_base.php");
session_start();

function user_Login ($login, $senha) {
  $usuario = selectSQLUnique("SELECT * FROM colaboradores WHERE login='$login' AND pw='$senha'");

  if(!empty($usuario)) {  
    $_SESSION["usuario"] = $usuario;
    $data_atual = date("H:i:s - d/m/y");
    iduSQL("INSERT INTO acessos (data, id_colaborador) VALUES ('$data_atual', $usuario[id])");
    header("Location: home.php");    
  }

  else {
    return false;
  };
}

function check_Login () { 
  if(empty($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();      
  }
  else {
    return $_SESSION["usuario"];
  }
}

function get_Name($id) {
   $name = selectSQLUnique("SELECT nome FROM colaboradores WHERE id=$id");
   return $name["nome"];
}

function logout() {  
  session_destroy();
  header("Location: index.php");
  exit();
}

?>