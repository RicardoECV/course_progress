<?php

  $header_footer = true;

  require_once("../requires.php");
  
  $user = checkLogin();
    
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    iduSQL("DELETE FROM destaques WHERE id=$id");    
  }

  require_once("components/header.php");
  require_once("views/destaque_apagado_view.php");
  require_once("components/footer.php");

?>