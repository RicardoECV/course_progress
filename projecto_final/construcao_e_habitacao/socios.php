<?php

  require_once("requires.php");
  $pagina_actual = "socios";
  $footer_contacto = false;
  $banner = getBanner($pagina_actual);
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos();
  $socios = getTextoSocios();   

  require_once("components/header.php");
  require_once("views/socios_view.php");
  require_once("components/footer.php");

?>
