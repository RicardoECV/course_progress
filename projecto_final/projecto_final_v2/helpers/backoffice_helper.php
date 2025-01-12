<?php

function login($login, $pw) {
  $usuario = selecSQLUnique("SELECT * FROM backoffice WHERE login='$login' AND senha='$pw'");
  if(!empty($usuario)) {
    return $usuario;
  }
}


?>