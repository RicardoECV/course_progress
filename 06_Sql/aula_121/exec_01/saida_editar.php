<?php

require_once("data_base.php");

$form = isset($_GET["id"]) && isset($_GET["nome"]) && isset($_GET["preco"]); 
$form = $form && isset($_GET["quantidade"]) && isset($_GET["marca"]);

if(isset($_GET["id"])) {  
  $id = intval($_GET["id"]); 
  $nome = $_GET["nome"]; 
  $preco = floatval($_GET["preco"]); 
  $quantidade = intval($_GET["quantidade"]); 
  $marca = $_GET["marca"];    
       
  $repetida = selectSQL("SELECT * FROM produtos WHERE nome LIKE '$nome' && id!=$id");

  if(empty($repetida)) {
    iduSQL("UPDATE produtos SET nome='$nome', preco=$preco, quantidade=$quantidade, marca='$marca' WHERE id=$id");
    header("Location: index.php?id=$id");
    exit();  
  }      
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
  <title>Exec 121.1</title>

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

    <?php if(empty($repetida)): ?>

      <div class="row">
        <div class="col-12">        
          <h2>Produto editado com sucesso!</h2>
        </div>
      </div> 

    <?php else: ?>

      <div class="row">
        <div class="col-12">        
          <h2>Produto já existe!</h2>
        </div>
      </div>

    <?php endif; ?>

    <div class="row">
      <div class="col-4 m-auto">
        <a href="index.php">
          <button>Home</button>
        </a>
      </div>
    </div>
      
  </div>
  
</body>
</html>