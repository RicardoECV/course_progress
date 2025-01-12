<?php

  function getDestaques() {
    $resultado = selectSQL("SELECT * FROM destaques");
    return $resultado;
  }

  function getDestaquesHome() {
    $resultado = selectSQL("SELECT * FROM destaques WHERE home_page=1");
    return $resultado;
  }

  function getDestaqueUnico($id) {
    $resultado = selectSQLUnique("SELECT * FROM destaques WHERE id=$id");
    return $resultado;
  }

  // Paginacao
  function getTotalPaginasD($elementos_pagina) {    
    $total_destaques = selectSQLUnique("SELECT count(*) AS total FROM destaques");
    $total_elementos = intval($total_destaques["total"]);
    $total_paginas = ceil($total_elementos/$elementos_pagina);
    return $total_paginas;
  }

  function getDestaquesPorPagina($elementos_pagina, $pagina) {
    $elementos_ignorados = (($pagina - 1) * $elementos_pagina);
    $destaques_pagina = selectSQL("SELECT * FROM destaques LIMIT $elementos_pagina OFFSET $elementos_ignorados");
    return $destaques_pagina;
  }
  
?>