<?php

if(isset($_GET["numero"])){
  $numero = intval($_GET["numero"]);
}

else {
  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 94.4</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Calculo  PHP</h1>
  <hr><br>
  <form action="saida.php">

    <?php for($i = 1 ; $i <= $numero ; $i++): ?>
      <label>Idade do Homem <?=$i;?></label>      
      <input type="number" name="idades_H[]" required min="1"> 
      <br>  
    <?php endfor; ?>
    <br><hr><br>

    <?php for($i = 1 ; $i <= $numero ; $i++): ?>
      <label>Idade da Mulher <?=$i;?></label>      
      <input type="number" name="idades_M[]" required min="1">
      <br>
    <?php endfor; ?>

    <br><hr><br>
    <input type="submit">

  </form>
  
</body>
</html>