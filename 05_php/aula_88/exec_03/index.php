<?php

$euros = 100.00;
$moeda = "";

switch($moeda) {
  
  case "dolar":
    $resultado = $euros * 1.102;
    break;

  case "libras":
    $resultado = $euros * 0.84;
    break;
  
  case "reais":
    $resultado = $euros * 6.22;
    break;

  case "iene":
    $resultado = $euros * 156.77;
    break;

  default:
    $resultado = "OPÇÃO INVÀLIDA";
}

echo "<h1>$resultado</h1>";

?>