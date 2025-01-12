<?php

  require_once("requires.php");
  $pagina_actual = "destaque_unico";
  $footer_contacto = false;
  $banner = getBanner($pagina_actual);
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos();
  

  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $destaque_unico = getDestaqueUnico($id);   
  }

  require_once("components/header.php");
  require_once("views/destaque_unico_view.php");
  require_once("components/footer.php");

?>

