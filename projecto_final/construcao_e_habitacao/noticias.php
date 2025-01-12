<?php

  require_once("requires.php");

  $pagina_actual = "noticias";
  $footer_contacto = false;
  $banner = getBanner($pagina_actual);
  $empreendimentos = getEmpreendimentos();
  $contactos = getContactos();  

  // Paginacao
  $pagina = 1;
  $elementos_pagina = 6;
  $total_paginas = getTotalPaginasN($elementos_pagina);
  
  if(!empty($_GET["pagina"])) {$pagina = $_GET["pagina"];}  
  if($pagina <= 0 || $pagina > $total_paginas ) {$pagina = 1;}
  
  $noticias = getNoticiasPorPagina($elementos_pagina, $pagina);

  require_once("components/header.php");
  require_once("views/noticias_view.php");
  require_once("components/footer.php");

?>
