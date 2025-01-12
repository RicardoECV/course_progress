<?php

require_once("helpers/colaboradores_helper.php");

$usuario = check_login();

if(empty($usuario)) {
  header("Location: index.php");
  exit();
}


?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 115.1</title>
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

        <nav class="navbar navbar-expand-lg navbar-dark bg-body-danger bg-danger">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Olá <?= $usuario["nome"]; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="produtos.php">Produtos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="colaboradores.php">Colaboradores</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>     
        
      </div>
    </div>
    
    <div class="row">
      <div class="col-12">
        <br>
        <h3>Bem Vindo <?= $usuario["nome"]; ?></h3>
      </div>

      <div class="col-12">
        <p>Data do ultimo acesso: (<?= $usuario["last_acess_date"]; ?>)</p>
      </div>
    </div>

  </div>
   
</body>
</html>