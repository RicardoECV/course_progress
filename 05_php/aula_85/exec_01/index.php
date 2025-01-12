<?php     

$nome = "";
$cor_1 = "black";
$cor_2 = "black";

$form = isset($_GET["nome"]) && isset($_GET["cor_1"])  && isset($_GET["cor_2"]);
if ($form){
  $nome = $_GET["nome"]; 
  $cor_1 = $_GET["cor_1"];
  $cor_2 = $_GET["cor_2"];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 85.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: linear-gradient(<?=$cor_1; ?>, <?= $cor_2; ?>">

    <h1>PHP Cores</h1>

    <div class="input_1">
      <form action="">

        <input type="text" name="nome" placeholder="Nome">
        <br><br>
        <input type="text" name="cor_1" placeholder="Primeira Cor">
        <br><br>
        <input type="text" name="cor_2" placeholder="Segunda Cor">
        <br><br>    
        <input type="submit" value="Pintar!">

      </form> 
    </div>   
    
    <?php if ($form): ?> 
        
        <div class="input_1">          
          <h3>
            O (<?= $nome;?>) escolheu a cor (<?= $cor_1; ?>) e (<?= $cor_2; ?>) para o fundo.
          </h3> 
        </div>

    <?php endif; ?>     
  
</body>
</html>