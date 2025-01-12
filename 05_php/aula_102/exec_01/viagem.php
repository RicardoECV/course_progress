<?php

  require_once("functions/functions.php");
  require_once("globais.php");  
  $pagina_actual = "viagem";
  $posicao = -1;
  
  $form = (isset($_GET["posicao"]));

  if($form) {
    $posicao = intval($_GET["posicao"]);
    if($posicao >= 0 && $posicao < count($viagens)) {
      $viagem_esp = $viagens[$posicao];
    }   
     
  }

  else {
    header("Location: index.php");
    exit();
  }
  

  require("components/header.php");
  require("views/viagem_view.php");
  require("components/footer.php");

?>