<?php

require_once("data_base.php");

$form = isset($_GET["contagem"]) && isset($_GET["limite_inf"]) && isset($_GET["limite_sup"]);

if($form) {  
  $limite_inf = floatval($_GET["limite_inf"]);
  $limite_sup = floatval($_GET["limite_sup"]);
  $contagem = $_GET["contagem"];
  $produtos_esp = selectSQL("SELECT nome,preco FROM produtos WHERE preco BETWEEN $limite_inf AND $limite_sup ORDER BY preco $contagem");   
}

else {
  header("Location: index.php");
  exit();
};

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 109.1</title>

  <!-- Bootsrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Local CSS -->
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <h1>Exec SQL</h1>
      </div>
    </div>    

    <?php if($form): ?>
      <div class="row m-5 p-4 border border-5 border-primary rounded-5">

        <div class="col-12">
          <h3>Preço entre (<?= number_format($limite_inf, 2); ?>€) e (<?= number_format($limite_sup, 2); ?>€) </h3>
          <br>
        </div>
        
        <div class="col-12">
          <ul style="list-style-type:square;"> 
            
            <?php foreach ($produtos_esp as $p):?>       

              <li class="text-left"><?= $p["nome"]; ?> - (<?= number_format($p["preco"], 2, ",", "."); ?>€)</li>                          
              
            <?php endforeach; ?>

          </ul>  
        </div>     
      
      </div>  
    <?php endif; ?>

    <div class="row">
      <div class="col-4 m-auto">
        <a href="index.php">
          <button>Reset!</button>
        </a>
      </div>
    </div>
      
  </div>
  
</body>
</html>