<?php

require_once("funcoes.php");
$filmes = [];
$filmes[] = novoFilme("Procura de Nemo", "nemo.jpg", "Lorem ipsum dolor sit amet.");
$filmes[] = novoFilme("Titanic", "titanic.jpg", "Lorem ipsum dolor sit amet.");
$filmes[] = novoFilme("Toy Story", "toystory.jpg", "Lorem ipsum dolor sit amet.");


?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 95.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div>

    <h1>Vectores PHP</h1>

  </div>  

  <?php
  
    $pessoas = ["Ricardo","Emanuel","Antonio","Ana","Francisco"];
    $matriz = [
      ["Ricardo", "Emanuel", "João"],
      ["Luis", "Carlos", "João"],
      ["Ana", "Jose", "Antonio"],
      ["Ricardo", "Emanuel", "João"]
    ];
    
    echo $matriz[1][2] . "<br>";
    echo $matriz[3][0] . "<br>";

    $total_pessoas = 0;

    foreach ($matriz as $turma) {
      $total_pessoas += count($turma);
    }

    echo $total_pessoas . "<br>";

    echo $filmes[1]["titulo"];

  ?>
  
</body>
</html>