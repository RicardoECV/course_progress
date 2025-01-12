<?php 

function getContactos() {
  $resultado = selectSQLUnique("SELECT * FROM contactos");
  return $resultado;
};


?>