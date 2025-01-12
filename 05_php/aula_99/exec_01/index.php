<?php

require_once("globais.php");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 99.1</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- CSS Local -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header class="container-fluid">

    <div class="row">
      <div class="col-12 px-0">

        <nav class="navbar navbar-expand-lg bg-info">

          <div class="container-fluid ">
            <a class="navbar-brand text-light" href="#">Viagens de Sonho</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                </li> 
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sonhos
                  </a>
                  <ul class="dropdown-menu">

                    <?php foreach ($banners as $b): ?>
                      <li><a class="dropdown-item" href="#"><?= $b["titulo"]; ?></a></li>
                    <?php endforeach; ?>

                  </ul>
                </li>
              </ul>

              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>

            </div>
          </div>
        </nav>

      </div>
    </div>

  </header>

  <main class="container-fluid">    

    <div class="row">
      <div class="col-12 px-0">

        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">

            <?php foreach ($banners as $i => $b): ?>          
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>" class="<?= (($i == 0) ? "active" : ""); ?>" aria-current="true" aria-label="Slide <?= $i ?>"></button>
            <?php endforeach; ?>  

          </div>
          <div class="carousel-inner">

            <?php foreach ($banners as $i => $b): ?>            
              <div class="carousel-item <?= (($i == 0) ? "active" : ""); ?>">
                <img src="<?= $b["imagem"]; ?>" class="d-block w-100" alt="<?= $b["titulo"]; ?>">
                <div class="carousel-caption d-none d-md-block">
                  <h5><?= $b["titulo"]; ?></h5>
                  <p><?= $b["texto"]; ?></p>
                </div>
              </div>
            <?php endforeach; ?>  
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
    </div>  

  </main>

  <footer class="container-fluid">

    <div class="row">
      <div class="col-12 text-center bg-info text-light py-5">
        Copyright Ricardo Valente &copy <?= date("Y"); ?>
      </div>
    </div>
    
  </footer>
 
</body>
</html>