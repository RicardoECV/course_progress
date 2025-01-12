<?php

$form = isset($_GET["nome"]) && isset($_GET["nif"]) && isset($_GET["morada"]);

if($form){
  $nome = $_GET["nome"];
  $nif = $_GET["nif"];
  $morada = $_GET["morada"];
}

else {
  header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 91.1</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <h1>Meio Pet PHP</h1>

  <form action="saida.php">

    <input type="hidden" name="nome" value="<?= $nome; ?>">
    <input type="hidden" name="nif" value="<?= $nif; ?>">
    <input type="hidden" name="morada" value="<?= $morada; ?>">
    <input type="text" name="pet" placeholder="Nome do pet" required>
    <br><br>
    <input type="text" name="especie" placeholder="Especie do pet" required>
    <br><br>
    <input type="text" name="cor" placeholder="Cor do pet" required>
    <br><br>
    <input type="submit">

  </form>
  
</body>
</html>