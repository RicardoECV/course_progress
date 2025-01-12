<?php     


$form = isset($_GET["temp_c"]);
if ($form) {
  $temp_c = floatval($_GET["temp_c"]);
  $temp_f = $temp_c * 1.8 + 32;
  $temp_k = $temp_c + 273.15;

  if($temp_c <= 0) {$img="gelo.jpg";}
  elseif($temp_c >= 100) {$img="vapor.jpg";}
  else {$img="agua.jpg";}
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 85.3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Conversor de Temperaturas</h1>

    <div class="input_1">

      <form action="">
        <input type="number" name="temp_c" placeholder="Temperatura" autofocus required step="0.1">        
        <input type="submit" value="Calcular">
      </form> 
      <br>
      <a href="index.php">
        <button>Reset!</button>
      </a>

    </div>  
    
    <?php if($form): ?>     
      
      <div class="input_1 caixa_1">
        <h2>
          <?= number_format($temp_c, 1); ?> ºC
          <br><br>        
          <?= number_format($temp_f, 2); ?> ºF
          <br><br>
          <?= number_format($temp_k, 2); ?> K
          <br><br>
        </h2>        
          <img src="images\<?php echo $img ?>" alt="Gelo">        
      </div> 

    <?php endif; ?>

</body>
</html>