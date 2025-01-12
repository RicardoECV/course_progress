<?php

echo "<body style= 'background-color: gray';>";

$num_1 = 23;
$num_2 = 12;
$num_3 = 15;

const NOME = "Antonio";
const NIF = 324234;

define("COMP", 312);

echo $num_1 + $num_3;
echo "<br>";
echo $num_2 - $num_3;
echo "<br>";
echo $num_2 * $num_3;
echo "<br>";
echo $num_2 / $num_3;
echo "<br>";
echo $num_2 % $num_3;

echo "<h1>". NOME ."</h1>";
echo NIF;

?>