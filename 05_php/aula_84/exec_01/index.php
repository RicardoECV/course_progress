<?php

echo "<body style='background-color: gray';>";

$nome = "Ricardo Valente";
$idade = 33;
$opcao = "";

if ($idade < 12) {$opcao = "CRIANÇA";}
elseif ($idade < 18) {$opcao = "ADOLESCENTE";}
elseif ($idade < 33) {$opcao = "JOVEM ADULTO";}
elseif ($idade < 60) {$opcao = "ADULTO";}
else {$opcao = "IDOSO";}

echo "<h1 style='text-align: center';>Verificação de Idade</h1>";
echo "<h2>Nome: ($nome)</h2>";
echo "<h2>Idade: ($idade)</h2><hr>";

echo "<marquee><b> $nome </b> possui <b> $idade </b>anos, logo é um(a) <b> $opcao </b>.</marquee>";

?>