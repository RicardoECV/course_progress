<?php


$form = isset($_GET["nome"]);
if($form){
  $nome = $_GET["nome"];
}


?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 86.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: linear-gradient(<?=$cor_1; ?>, <?= $cor_2; ?>">

    <h1>PHP Index</h1>

    <div class="caixa">      
    
      <h1><?= ($form) ? "Já" : "Nâo" ?> foi preenchido</h1>
      
    </div>

    <div class="caixa">
      <form action="">

        <input type="text" placeholder="Nome" name="nome" autofocus>
        <br><br>
        <input type="submit">

      </form>
      <br>
      <a href="index.php">
        <button>RESET</button>
      </a>
    </div>
  
</body>
</html>