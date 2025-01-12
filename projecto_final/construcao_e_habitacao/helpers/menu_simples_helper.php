<?php

  function getMenuSimples($pagina) {
    $resultado = selectSQLUnique("SELECT * FROM menu_simples WHERE nome_pagina='$pagina'");
    return $resultado;
  }

?>