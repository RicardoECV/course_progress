<?php 

  require_once("requires.php");
  $pagina_actual = "contactos";
  $footer_contacto = true;
  $banner = getBanner($pagina_actual);
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos();

  require_once("components/header.php");
  require_once("views/contactos_view.php");
  require_once("components/footer.php");

?>
