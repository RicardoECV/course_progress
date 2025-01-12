<?php

$saldo = 50

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exericio 84.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>PHP</h1>

  <?php if($saldo <= 15): ?>

    <h3>Ficar em casa</h3>

  <?php elseif($saldo <=30): ?>

    <h3>Ficar a dormir</h3>

  <?php else: ?>

    <h3>Viajar</h3>

  <?php endif; ?>
 
   
  
</body>
</html>