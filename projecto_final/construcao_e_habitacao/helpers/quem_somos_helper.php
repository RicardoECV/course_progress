<?php

  function getTextoQuem() {
    $resultado = selectSQLUnique("SELECT * FROM menu_simples WHERE id=1");
    return $resultado;
  }

?>