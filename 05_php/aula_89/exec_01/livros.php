<?php

$numero = 0;
$form = isset($_GET["numero"]);
if($form) {
  $numero = intval($_GET["numero"]);
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
  <title>Exec 89.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div>
    
    <hr>
      <h3>ULTIMOS LIVROS</h3>
      <a href="index.php">
        <button>Home</button>
      </a>
    <hr> 

    <?php if(!$form): ?>
      <h3>Preencha o formurálio anterior!</h3>
    <?php endif; ?>

    <div>       
      <?php for($i = 1; $i <= $numero; $i += 1): ?>
        
        <div class="card">
          
          <img src="imagens/<?=rand(1,5);?>.jpg" alt="Random">
          <h4>Livro <?=$i;?></h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, repudiandae animi odit quo quisquam labore minus tempora quasi? Quo, laborum quos! Rerum dicta eos ipsum?
          </p>         

        </div>

      <?php endfor; ?>
    </div>

  </div>
  
</body>
</html>