<?php

  require_once("functions/functions.php");
  require_once("globais.php");  
  $pagina_actual = "pesquisa";

  $form = isset($_GET["pesquisa"]);

  if($form) {
    $pesquisa = strtolower($_GET["pesquisa"]);
    $resultados = [];
    foreach ($viagens as $i => $v) {
      if(str_contains(strtolower($v->nome), $pesquisa)) {
        $v->id = $i;
        $resultados[] = $v;        
      }
    }
  }

  require("components/header.php");
  require("views/pesquisa_view.php");
  require("components/footer.php");

?>