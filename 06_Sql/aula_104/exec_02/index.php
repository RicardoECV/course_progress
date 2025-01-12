<?php

$produtos = [
  ["nome" => "Rato", "preco" => 5.99, "codigo" => 45435435, "marca" => "gamer"],
  ["nome" => "Papel", "preco" => 5.99, "codigo" => 4545435, "marca" => "madeira"],
  ["nome" => "Caneta", "preco" => 2.33, "codigo" => 3423423, "marca" => "especial"]
];

$conection = new PDO("mysql:host=localhost;dbname=codemaster_bd;charset=utf8mb4;", "root", "");

$query = $conection->query("SELECT * FROM produtos");
$produtos = $query->fetchAll(PDO::FETCH_BOTH);

$query = $conection->query("SELECT * FROM colaboradores");
$colaboradores = $query->fetchAll(PDO::FETCH_NUM);

$query = $conection->query("SELECT * FROM alunos");
$alunos = $query->fetchAll(PDO::FETCH_ASSOC);


echo "<pre>";
print_r($produtos);
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r($colaboradores);
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r($alunos);
echo "</pre>";

?>