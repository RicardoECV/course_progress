<?php

  $header_footer = true;

  require_once("../requires.php");
  
  $user = checkLogin();
  
  $form = !empty($_GET["titulo"]) && !empty($_GET["texto"]) && !empty($_GET["imagem"]);

  if($form) {
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem = $_GET["imagem"];
    
    iduSQL("INSERT INTO destaques (titulo, texto, imagem) VALUES ('$titulo', '$texto', '$imagem')");
    header("Location: destaques.php");
  }
 
  require_once("components/header.php");
  require_once("views/destaque_novo_view.php");
  require_once("components/footer.php");

?>