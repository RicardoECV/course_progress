<?php

  function getTextoFerias() {
    $resultado = selectSQLUnique("SELECT * FROM menu_simples WHERE id=3");
    return $resultado;
  }

?>