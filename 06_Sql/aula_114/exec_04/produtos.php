<?php

require_once("data_base.php");

session_start();

if(!empty($_SESSION["usuario"])) {
  $usuario = $_SESSION["usuario"];
}

else {
  header("Location: index.php");
};

$elementos = selectSQL("SELECT * FROM produtos"); 
$legenda = array_keys($elementos[0]);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 114.3</title>
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

    <div class="row m-5 p-4 border border-5 border-primary rounded-5">
      <div class="col-12">

        <table>
          <tr>

            <?php foreach ($legenda as $l): ?>
            
              <th class="text-uppercase"><?= $l; ?></th>            
            
            <?php endforeach; ?>
            
          </tr>

          <?php foreach ($elementos as $e): ?>
            <tr>        

              <?php foreach ($legenda as $l): ?>            
                <td><?= $e[$l]; ?></td>  
              <?php endforeach; ?>
                        
            </tr>
          <?php endforeach; ?>

        </table>
                
      </div>
    </div>  
  </div>

</body>
</html>