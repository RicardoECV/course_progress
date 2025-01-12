<?php

  function getTextoSocios() {
    $resultado = selectSQLUnique("SELECT * FROM menu_simples WHERE id=2");
    return $resultado;
  }

?>