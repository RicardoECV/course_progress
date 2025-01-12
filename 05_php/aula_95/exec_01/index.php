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
  
    $pessoas = [
      "Ricardo",
      "Emanuel",
      "Antonio",
      "Ana",
      "Francisco",
      "Fernando"
    ];
    
    for ($i = 0; $i < count($pessoas); $i++) {
      echo ($i) . " - " . $pessoas[$i] . "<br>";
    }

    echo "<hr>";

    foreach ($pessoas as $p) {
      echo $p . "<br>";
    }

    echo "<hr>";

    foreach ($pessoas as $p => $valor) {
      echo ($p + 1) . " - " . $valor . "<br>";
    }

  ?>
  
</body>
</html>