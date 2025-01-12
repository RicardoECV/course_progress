<?php 

function getCarousel() {
  $resultado = selectSQL("SELECT * FROM carousel");
  return $resultado;
};


?>