<?php

$form = isset($_GET["numero"]);

if($form){
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
  <title>Exec 92.1</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <h1>Meio Alunos PHP</h1>

  <form action="saida.php">

    <input type="hidden" name="numero" value="<?= $numero ?>">

    <?php for($i = 1 ; $i <= $numero ; $i += 1): ?>
      <label>Idade do Aluno <?=$i;?></label>      
      <input type="number" name="idade<?= $i; ?>" required min="1">
      <br>
    <?php endfor; ?>
    <br>  
    <input type="submit">

  </form>
  
</body>
</html>