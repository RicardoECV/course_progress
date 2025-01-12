<?php

  function getNoticias() {
    $resultado = selectSQL("SELECT * FROM noticias");
    return $resultado;
  }

  // Paginacao
  function getTotalPaginasN($elementos_pagina) {    
    $total_destaques = selectSQLUnique("SELECT count(*) AS total FROM noticias");
    $total_elementos = intval($total_destaques["total"]);
    $total_paginas = ceil($total_elementos/$elementos_pagina);
    return $total_paginas;
  }

  function getNoticiasPorPagina($elementos_pagina, $pagina) {
    $elementos_ignorados = (($pagina - 1) * $elementos_pagina);
    $destaques_pagina = selectSQL("SELECT * FROM noticias LIMIT $elementos_pagina OFFSET $elementos_ignorados");
    return $destaques_pagina;
  }
  
?>