<?php

$form = isset($_GET["nome"]) && isset($_GET["nif"]) && isset($_GET["morada"]) && isset($_GET["pet"]) && isset($_GET["especie"]) && isset($_GET["cor"]);

if($form){
  $pet = $_GET["pet"];
  $especie = $_GET["especie"];
  $cor = $_GET["cor"];
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

  <div>

    <h1>Saida PHP</h1>
    <hr>
    
    <?php if($form): ?>
      
      <h2>Nome do dono: (<?=$nome;?>)</h2>
      <br>
      <h2>Nif do dono: (<?=$nif;?>)</h2>
      <br>
      <h2>Morada do dono: (<?=$morada;?>)</h2>
      <br>
      <h2>Nome do pet: (<?=$pet;?>)</h2>
      <br>
      <h2>Especie do pet: (<?=$especie;?>)</h2>
      <br>
      <h2 style="color:<?=$cor?>;">Cor do pet: (<?=$cor;?>)</h2>

    <?php else: ?>

      <h2>Preencha o Formulário todo!</h2>

    <?php endif; ?> 
    
    <a href="index.php">
      <button>Home</button>
    </a>

  </div>
  
</body>
</html>