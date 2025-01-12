<?php

  $header_footer = true;

  require_once("../requires.php");

  $user = checkLogin();
  $form = !empty($_GET["pagina"]);
  
  if($form) {
    $pagina = $_GET["pagina"];    
    $menu_simples = getMenuSimples($pagina);
    $form_2 = !empty($_GET["texto"]);

    if($form_2) {
      $texto = $_GET["texto"];
      iduSQL("UPDATE menu_simples SET texto='$texto' WHERE nome_pagina='$pagina'");
      header("Location: menu_simples.php?pagina=$pagina");
      exit();
    }    
  }

  require_once("components/header.php");
  require_once("views/menu_simples_view.php");
  require_once("components/footer.php");

?>