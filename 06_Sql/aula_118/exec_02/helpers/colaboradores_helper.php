<?php

date_default_timezone_set('Europe/Lisbon');

require_once("data_base.php");
session_start();

function user_Login ($login, $senha) {
  $usuario = selectSQLUnique("SELECT * FROM colaboradores WHERE login='$login' AND pw='$senha'");

  if(!empty($usuario)) {  
    $_SESSION["usuario"] = $usuario;   
    iduSQL("INSERT INTO acessos_com_data (id_colaborador) VALUES ( $usuario[id])");
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

function get_DadosColaborador($id) {
  $colaborador = selectSQLUnique("SELECT nome, apelido, id FROM colaboradores WHERE id=$id");
  return "(#$colaborador[id]) $colaborador[nome] $colaborador[apelido]";
}

function logout() {  
  session_destroy();
  header("Location: index.php");
  exit();
}

?>