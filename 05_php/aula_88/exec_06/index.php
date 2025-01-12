<?php

require_once "funcoes.php";

$form = isset($_GET["numero"]);
if($form) {
  $numero = intval($_GET["numero"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 88.6</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div>
    <h1>Loops PHP</h1>
    <form action="">
      <input type="number" placeholder="Insira um número!" required name="numero" min="0">
      <input type="submit">
    </form>
    <br>
    <a href="index.php">
      <button>Reset</button>
    </a>

  </div>

  <?php if($form): ?>

    <div>

      <h2> 
        <hr>
        While:               
        <?php loopWhile($numero); ?>
        <hr>
        For:        
        <?php loopFor($numero); ?>
        <hr>
      </h2> 

    </div>
  
  <?php endif; ?>
  
</body>
</html>