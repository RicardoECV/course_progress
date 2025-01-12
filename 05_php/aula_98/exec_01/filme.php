<?php 

require_once("funcoes.php");
require_once("globais.php");

$form = isset($_GET["posicao"]);

if($form) {
  $posicao = intval($_GET["posicao"]);
  $filme_esp = $filmes[$posicao];
}

else {
  header("Locations: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 98.1</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- CSS Local -->
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <header class="container-fluid px-0">

    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-danger navbar-dark">

          <div class="container-fluid ">
            
            <a class="navbar-brand" href="#">Filmes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li> 
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Filmes
                  </a>
                  <ul class="dropdown-menu">

                    <?php foreach($filmes as $i => $f): ?>
                      <li><a class="dropdown-item" href="filme.php?posicao=<?= $i; ?>"><?= $f["titulo"]; ?></a></li>
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

  <main class="container">

    <div class="row">
      <div class="col-12">
        <h1 class="text-center my-5"><?= $filme_esp["titulo"] ?></h1>
        <img src="<?= $filme_esp["imagem"] ?>" alt="<?= $filme_esp["titulo"] ?>" class="float-start mx-3">
        <p><?= $filme_esp["texto"] ?></p>
      </div>
    </div>

    <div class="row text-center mt-5">
      <div class="col-12">
        <a href="index.php">
          <button class="btn btn-danger">Home</button>
        </a>
      </div>
    </div>

  </main>

  <footer class="container-fluid">

    <div class="row py-5">
      <div class="col-12 text-center bg-danger text-light py-5">
        Copyright &copy <?= date("Y"); ?>
      </div>
    </div>
    
  </footer>
  
</body>
</html>