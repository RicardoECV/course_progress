<?php

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
  <title>Exec 89.1</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <div class="container-fluid">
    
    <div class="row m-auto text-center">
      <hr>
        <h3>ULTIMOS LIVROS</h3>
        <a href="index.php">
          <button>Home</button>
        </a>
      <hr> 
    </div>

    <div class="row">       

      <?php for($i = 1; $i <= $numero; $i += 1): ?>
        <div class="col p-2 mx-auto">
        
          <div class="card h-100" style="width: 18rem;">
            <img src="imagens/<?=rand(1,5)?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        </div>
      <?php endfor; ?>
    </div>

  </div>
  
</body>
</html>