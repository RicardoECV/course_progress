<?php 

date_default_timezone_set("Europe/Lisbon");

$data_atual = date("H:m:s");

?>

<!DOCTYPE html>
<html lang="pt">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 141.1</title>
  
  <link rel="stylesheet" href="stylce.css">
  <script src="main.js" defer></script>

</head>
<body>

  <div>
    <h1>Javascript</h1>
  </div>

  <div class="box">
    <h2>PHP</h2>
    <h3><?= $data_atual; ?></h3>
  </div>

  <div class="box">
    <h2>Javascript</h2>
    <div id="saida"></div>
  </div>

  <div class="box">
    <h2>Javascript 2</h2>
    <div id="saida_2">
      <div id="barra_horas" class="barras"></div>
      <div id="barra_minutos" class="barras"></div>
      <div id="barra_segundos" class="barras"></div>
      <div id="barra_milisegundos" class="barras"></div>
    </div>
  </div>
  
  
</body>
</html>