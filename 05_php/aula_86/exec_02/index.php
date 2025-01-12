<?php

$form = isset($_GET["raio"]);
if ($form) {
  $raio = floatval($_GET["raio"]); 
  $comp = 2 * M_PI * $raio;
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exericio 86.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Calculo da circunferencia</h1>

  <div class="input_1">

    <form action="">
      <input type="number" name="raio" placeholder="<?=$raio;?>" autofocus required step="0.01" min="0"> 
      <input type="submit" value="Calcular">
    </form> 
    <br>
    <a href="index.php">
      <button>Reset!</button>
    </a>

  </div>  

  <?php if($form): ?>
    <div class="caixa">
      <p class="raio"><?=number_format($raio, 2);?></p>
      <p class="comp"><?=number_format($comp, 2);?></p>      
    </div>
  <?php endif; ?>
     
</body>
</html>