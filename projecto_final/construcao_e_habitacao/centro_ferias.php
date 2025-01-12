<?php

  require_once("requires.php");
  $pagina_actual = "centro_ferias";
  $footer_contacto = false;
  $banner = getBanner($pagina_actual);
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos();
  $centro_ferias = getTextoFerias();

  require_once("components/header.php");
  require_once("views/centro_ferias_view.php");
  require_once("components/footer.php");

?>
