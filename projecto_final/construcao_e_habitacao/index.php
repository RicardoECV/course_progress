<?php

  require_once("requires.php");

  $pagina_actual = "index";
  $footer_contacto = false;

  $carousel = getCarousel();
  $quem_somos = getTextoQuem();
  $destaques_h = getDestaquesHome();
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos(); 

  require_once("components/header.php");
  require_once("views/index_view.php");
  require_once("components/footer.php");

?>
