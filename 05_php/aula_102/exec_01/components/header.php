<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 102.1</title>

  <!-- Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Local Css -->
  <link rel="stylesheet" href="public\css\style.css">
</head>
<body>

  <header class="container-fluid">

    <div class="row">
      <div class="col-12 px-0">

        <nav class="navbar navbar-expand-lg bg-danger navbar-dark">

          <div class="container-fluid">
            <a class="navbar-brand" href="#"><?= titulo_nav($pagina_actual); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                  <a class="nav-link <?= ($pagina_actual=="index") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                </li>
               
                <li class="nav-item dropdown">
                  <a class="nav-link <?= ($pagina_actual=="viagem") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Viagens
                  </a>

                  <ul class="dropdown-menu">

                    <?php foreach ($viagens as $i => $v): ?>

                      <li><a class="dropdown-item <?= ($posicao == $i && $pagina_actual=="viagem") ? "active" : ""; ?>" href="viagem.php?posicao=<?= $i; ?>"><?= $v->nome; ?></a></li>

                    <?php endforeach; ?>

                  </ul>

                  <li class="nav-item">

                    <a class="nav-link <?= ($pagina_actual=="contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>

                  </li>

                </li>                
              </ul>
              <form class="d-flex" role="search" action="pesquisa.php">

                <input class="form-control me-2" type="search" placeholder="Destino" aria-label="Search" name="pesquisa">
                <button class="btn btn-outline-success" type="submit">Buscar</button>

              </form>
            </div>
          </div>

        </nav>

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
                <img src="<?= $c->imagem; ?>" class="d-block w-100" alt="...">
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

  </header>