<?php

function saudar(){
  echo "Boa noite<br>";
}

function saudarMelhor($nome){
  echo "Boa noite $nome<br>";
}

function calcIMC($peso, $altura) {
  $imc = $peso / $altura ** 2;
  echo "IMC = " .number_format($imc, 2);
}

function desconto10($valor) {
  return $valor * 0.9;
}

saudar();
echo "<hr>";
saudarMelhor("Ricardo");
calcIMC(55, 1.24);

echo "<hr>";

$desconto1 = desconto10(100);
echo $desconto1;

?>