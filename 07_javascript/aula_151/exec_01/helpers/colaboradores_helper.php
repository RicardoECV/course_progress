<?php

require_once("data_base.php");
session_start();

function user_Login($login, $senha) {
  $usuario = selectSQLUnique("SELECT * FROM colaboradores_cripto WHERE login='$login'");

  if(!empty($usuario) && password_verify($senha, $usuario["senha"])) {    
      $_SESSION["usuario"] = $usuario;   
      iduSQL("INSERT INTO acessos_com_data (id_colaborador) VALUES ($usuario[id])");
      header("Location: home.php");             
  }
  else {
    return false;
  };
}

function check_Login() { 
  if(empty($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();      
  }
  else {
    return $_SESSION["usuario"];
  }
}

function get_Name($id) {
   $name = selectSQLUnique("SELECT nome FROM colaboradores_cripto WHERE id=$id");
   return $name["nome"];
}

function get_DadosColaborador($id) {
  $colaborador = selectSQLUnique("SELECT nome, apelido, id FROM colaboradores_cripto WHERE id=$id");
  return "(#$colaborador[id]) $colaborador[nome] $colaborador[apelido]";
}

function logout() {  
  session_destroy();
  header("Location: index.php");
  exit();
}

?>