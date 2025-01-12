<?php

if(isset($_GET["idades_M"]) && isset($_GET["idades_H"])){
  $idades_H = $_GET["idades_H"];
  $idades_M = $_GET["idades_M"];

  $idade_HV = max($idades_H);
  $idade_MV = max($idades_M);
  $idade_HN = min($idades_H);
  $idade_MN = min($idades_M);
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

  <div>

    <h1>Calculo Idades PHP</h1>       
    
    <div class="caixa">

      <h3>Idade do Homem Mais Velho (<?= $idade_HV; ?>) </h3>
      <h3>Idade da Mulher Mais Velha (<?= $idade_MV; ?>) </h3>
      <h3>Idade do Homem Mais Novo (<?= $idade_HN; ?>) </h3>
      <h3>Idade da Mulher Mais Nova (<?= $idade_MN; ?>) </h3>     
      <h3>Homem Mais Velho + Mulher Mais Nova = (<?= $idade_HV + $idade_MV; ?>)</h3>     
      <h3>Homem Mais Novo * Mulher Mais Velha = (<?= $idade_HN * $idade_MV; ?>)</h3>  

    </div>
    <br>
    
    <div class="caixa">
      
      <h4>Idades Masculinas</h4>
      <p><?= implode(" - ", $idades_H); ?></p>

      <h4>Idades Femininas</h4>
      <p><?= implode(" - ", $idades_M); ?></p>
      <br>

      <a href="index.php">
        <button>Reset</button>
      </a>

    </div> 

  </div>
  
</body>
</html>