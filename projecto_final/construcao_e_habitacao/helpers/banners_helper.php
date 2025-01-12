<?php 

function getBanner($pagina_actual) {
  $resultado = selectSQLUnique("SELECT * FROM banners WHERE pagina='$pagina_actual'");
  return $resultado;
};

?>