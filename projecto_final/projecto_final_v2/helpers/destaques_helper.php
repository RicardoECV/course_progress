<?php

$total_elementos_pagina = 6;

function getTotalElementosDestaques() {
  $resultado = selectSQLUnique("SELECT Count(*) as total FROM destaques");
  return $resultado;
}

function getTotalPaginasDestaques() {
  global $total_elementos_pagina;
  $resultado = ceil(getTotalElementosDestaques() / $total_elementos_pagina);
  return $resultado;
}

function getDestaquesPorPagina($pagina) {
  global $total_elementos_pagina;
  $ponto_inicio = $total_elementos_pagina * ($pagina - 1);
  return 0;
}


?>
