<?php

  $header_footer = false;

  require_once("../requires.php");

  $form = !empty($_POST["login"]) && !empty($_POST["pw"]);

  if($form) {
    if(!empty(user_login($_POST["login"], $_POST["pw"]))) {
      exit();
    }
  }

  require_once("components/header.php");
  require_once("views/index_view.php");
  require_once("components/footer.php");

?>