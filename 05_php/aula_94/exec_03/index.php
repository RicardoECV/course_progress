<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 93.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div>

    <h1>Vectores PHP</h1>

  </div>  

  <?php

    $aluno = "Joao";
    $turma = ["Ricardo", "Emanuel", "Antonio", "Ana", "Francisco", "Fernando"];
    $turma_antiga = array("Ricardo", "Emanuel", "Antonio", "Ana", "Francisco", "Fernando");

    var_dump($turma);
    print_r($turma);
    echo "<br>";
    print_r($turma_antiga);
    echo "<br>";

    echo "<hr>";


    for ($i = 0; $i < count($turma); $i ++) {
      echo "Aluno número ($i) é o ($turma[$i])" . "<br>";   
    }
    echo "<hr>";

    foreach ($turma as $t) {
      echo $t . "<br>";
    }

   

  ?>
  
</body>
</html>