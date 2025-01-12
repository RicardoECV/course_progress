<?php

$form = isset($_GET["nome"]) && isset($_GET["id"]);

if($form) {  
  $nome = $_GET["nome"];      
  $id = $_GET["id"];      
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
  <title>Exec 112.1</title>

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
    
    <div class="row">
      <div class="col-12">
       
        <label for="delete"><h4>Deseja apagar o produto? (<?= $nome ?>) (<?= $id ?>)</h4></label>
        <br><br>
        <a href="saida.php?&id=<?= $id ?>">
          <button>Sim</button>
        </a>
        <br><br>
        <a href="index.php">
          <button>Não</button>
        </a>
        <br><br>

      </div>
    </div>  
      
  </div>
  
</body>
</html>