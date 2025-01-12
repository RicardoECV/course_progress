<?php

require_once("data_base.php");

$produtos = selectSQL("SELECT * FROM produtos");
$colaboradores = selectSQL("SELECT * FROM colaboradores");


echo "<pre>";
print_r($produtos);
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r($colaboradores);
echo "</pre>";

?>