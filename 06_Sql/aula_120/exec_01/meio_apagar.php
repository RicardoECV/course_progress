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
  <title>Exec 120.1</title>

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

        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Loja PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="novo_produto.php">Registar Novo Produto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nova_venda.php">Nova Venda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="produtos.php">Lista de Vendas</a>
                </li>                                
              </ul>              
            </div>
          </div>
        </nav>

      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h1>Apagar Produto</h1>
        <br>
      </div>
    </div>  
    
    <div class="row">
      <div class="col-12">
       
        <label for="delete"><h4>Deseja apagar o produto? (<?= $nome ?>) (#<?= $id ?>)</h4></label>
        <br><br>
        <a href="saida_apagar.php?&id=<?= $id ?>">
          <button class="btn btn-danger">Sim</button>
        </a>
        <br><br>
        <a href="index.php">
          <button class="btn btn-primary">Não</button>
        </a>
        <br><br>

      </div>
    </div>  
      
  </div>
  
</body>
</html>