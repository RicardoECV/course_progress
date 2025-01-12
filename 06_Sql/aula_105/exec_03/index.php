<?php

require_once("data_base.php");

$carousel = selectSQL("SELECT * FROM carousel");
$noticias = selectSQL("SELECT * FROM noticias");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 105.2</title>

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
      <div class="col-12 px-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-indicators">

            <?php foreach ($carousel as $i => $c): ?> 

              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" class="<?= ($i==0) ? "active" : ""; ?>" aria-current="true" aria-label="Slide 1"></button>
              
            <?php endforeach; ?>
            
          </div>

          <div class="carousel-inner">

            <?php foreach ($carousel as $i => $c): ?>
              <div class="carousel-item <?= ($i==0) ? "active" : ""; ?>">
                <img src="<?= $c["imagem"]; ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5><?= $c["titulo"]; ?></h5>
                  <p><?= $c["texto"]; ?></p>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
          
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>
      </div>
    </div>

    <div class="row my-5">

      <div class="col-12 mb-3">
        <h2>Carousel</h2>
      </div>

      <div class="col-12">

        <table>

          <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Texto</th>
            <th>Imagem</th>
            <th>Autor</th>
          </tr>

          <?php foreach ($carousel as $c): ?>

            <tr>
              <td><?= $c["id"]; ?></td>
              <td><?= $c["titulo"]; ?></td>
              <td><?= $c["texto"]; ?></td>
              <td><img src="<?= $c["imagem"]; ?>" alt="<?= $c["titulo"]; ?>"></td>   
              <td><?= $c["autor"]; ?></td>   
            </tr>

          <?php endforeach; ?>    

        </table>

      </div>
  
    </div>    
  
    <div class="row">

      <div class="col-12 mb-2">
        <h2>Noticias</h2> 
      </div>
      
      <div class="col-12">

        <table>

          <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Subtitulo</th>
            <th>Data</th>
            <th>Autor</th>
            <th>Imagem</th>
          </tr>

          <?php foreach ($noticias as $n): ?>

            <tr>
              <td><?= $n["id"]; ?></td>
              <td><?= $n["titulo"]; ?></td>
              <td><?= $n["subtitulo"]; ?></td>
              <td><?= $n["data"]; ?></td>
              <td><?= $n["autor"]; ?></td>   
              <td><img src="<?= $n["imagem"]; ?>" alt="<?= $n["titulo"]; ?>"></td>   
            </tr>

          <?php endforeach; ?>    

        </table>

      </div>

    </div> 
    
    <div class="row my-5"> 

        <div class="col-12 mb-2">
          <h2>Cards Noticias</h2> 
        </div>

        <div class="col-12 d-flex justify-content-center gap-5">

          <?php foreach ($noticias as $c): ?>  
            
            <div class="card" style="width: 18rem;">
              <img src="<?= $c["imagem"]; ?>" class="card-img-top" alt="<?= $c["titulo"]; ?>">
              <div class="card-body">
                <h5 class="card-title"><?= $c["titulo"]; ?></h5>
                <p class="card-text"><?= $c["subtitulo"]; ?></p>
                <a href="#" class="btn btn-primary"><?= $c["autor"]; ?></a>
              </div>
            </div>

          <?php endforeach; ?> 

        </div> 

    </div>

  </div>
  
</body>
</html>