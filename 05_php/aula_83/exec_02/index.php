<?php

echo "<body style= 'background-color: rgba(0,0,0,0.5)';>";

// Exercicio Matemática
$num_1 = 8;
$num_2 = 3;

$soma = $num_1 + $num_2;
$sub = $num_1 + $num_2;
$mul = $num_1 * $num_2;
$div = $num_1 / $num_2;

$resto = $num_1 % $num_2;
$pot = $num_1 ** $num_2;

// Exercicio Idade
$ano_actual = 2024;
$idade_usuario = 33;
$data_nasc = $ano_actual - $idade_usuario;

// Exercicio Temperaturas
$temp_celc = 32;
$temp_f = $temp_celc * 1.8 + 32;
$temp_k = $temp_celc + 273.15;


// Exercicio Matemática
echo "<h1 style= 'text-align: center';> Exercicio Matemática </h1><hr>";
echo "<h2> Numero 1 = $num_1</h2>";
echo "<h2> Numero 2 = $num_2</h2><hr>";

echo "<h3> Soma = $soma </h3>";
echo "<h3> Subtração = $sub </h3>";
echo "<h3> Multiplicação = $mul </h3>";
echo "<h3> Divisão =". round($div,3) ."</h3>";
echo "<h3> Divisão =". number_format($div,2) ."</h3>";
echo "<h3> Resto = $resto </h3>";
echo "<h3> Potência = $pot </h3><br><br><hr>";

// Exercicio Idade
echo "<h1 style= 'text-align: center';> Cálculo do Ano de Nascimento </h1>";
echo "<h2>Ano Actual: $ano_actual </h2>";
echo "<h2>Idade Usuário: $idade_usuario </h2>";
echo "<h2>Data de Nascimento: $data_nasc </h2><br><br><hr>";

// Exercicio Temperaturas
echo "<h1 style= 'text-align: center';> Conversor Temperatura PHP </h1>";
echo "<h2>Celcius: " . $temp_celc . "º</h2>";
echo "<h2>" . $temp_celc . "º = " . round($temp_f,2) . "F</h2>";
echo "<h2>" . $temp_celc . "º = " . round($temp_k,2) . "K</h2><hr>";

?>