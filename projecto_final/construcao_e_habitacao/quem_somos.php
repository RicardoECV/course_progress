<?php

  require_once("requires.php");
  $pagina_actual = "quem_somos";
  $footer_contacto = false;
  $banner = getBanner($pagina_actual);
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos();
  $quem_somos = getTextoQuem();

  require_once("components/header.php");
  require_once("views/quem_somos_view.php");
  require_once("components/footer.php");

?>

