<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Construção e Habitação</title>

  <!-- CSS Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
  <!-- CSS Local -->
  <link rel="stylesheet" href="public/fonts/stylesheet.css">
  <link rel="stylesheet" href="public/css/style.css">  

  <!-- JS Local -->
  <script src="public/js/main.js" defer></script>
</head>
<body>

  <!-- Header -->
  <header class="container-fluid px-0">

    <!-- Navbar -->
    <div class="row m-auto sombreamento position-relative z-2">
      <div class="col-12 px-0 d-flex pt-lg-4 mt-lg-2 justify-content-lg-center justify-content-between">        
        <img class="img-contrucao" src="public/images/logos/logo.png" alt="Logo Construção">        
        <nav id="espacamento-navbar-butao-mobile" class="navbar navbar-expand-lg bg-body-white py-0 justify-content-center">
          <div class="container-fluid px-0 align-self-end">            
            <button onclick="switchImg()" class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <img src="public/images/buttons_icons/menu.svg" class="img-toggler" alt="Imagem Menu">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav navbar-mobile m-auto mb-2 mb-lg-0 navbar-espacamento-interno align-items-end">                
                <li class="nav-item">
                  <a id="nav-link-mobile" class="nav-link text-uppercase poppins-medium <?= ($pagina_actual == "index") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a id="nav-link-mobile" class="nav-link nav-link-mobile text-uppercase poppins-medium <?= ($pagina_actual == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">Quem somos</a>
                </li>
                <li class="nav-item">
                  <a id="nav-link-mobile" class="nav-link nav-link-mobile text-uppercase poppins-medium <?= ($pagina_actual == "socios") ? "active" : ""; ?>" href="socios.php">Sócios</a>
                </li>
                <li class="nav-item">
                  <a id="nav-link-mobile" class="nav-link nav-link-mobile text-uppercase poppins-medium <?= ($pagina_actual == "noticias") ? "active" : ""; ?>" href="noticias.php">Notícias</a>
                </li>
                <li class="nav-item">
                  <a id="nav-link-mobile" class="nav-link nav-link-mobile text-uppercase poppins-medium <?= ($pagina_actual == "destaques" || $pagina_actual == "destaque_unico") ? "active" : ""; ?>" href="destaques.php">Destaques</a>
                </li>

                <li class="nav-item dropdown">
                  <a id="nav-link-mobile" class="nav-link text-uppercase poppins-medium <?= ($pagina_actual == "empreendimento") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Empreendimentos
                  </a>

                  <ul class="dropdown-menu mt-0 border-0 dropdown-menu-mobile rounded-0">
                    
                    <?php foreach($empreendimentos as $i => $e): ?>

                      <li>
                        <a class="dropdown-item text-uppercase text-white poppins-regular <?= ($id==$e["id"]) ? "active" : ""; ?>" href="empreendimento.php?id=<?= $e["id"] ?>"><?= $e["titulo"]; ?></a>
                      </li>
                      <?php if($i+1 < count($empreendimentos)): ?>
                        <li><hr class="dropdown-divider dropdown-divider-mobile bg-white"></li>
                      <?php endif; ?>
                      
                    <?php endforeach; ?>  
                     
                  </ul>

                </li> 

                <li class="nav-item">
                  <a id="nav-link-mobile" class="nav-link text-uppercase poppins-medium <?= ($pagina_actual == "centro_ferias") ? "active" : ""; ?>" href="centro_ferias.php">Centro de férias</a>
                </li>
                <li class="nav-item">
                  <a id="nav-link-mobile" class="nav-link text-uppercase poppins-medium <?= ($pagina_actual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                </li>               
              </ul>              
            </div>
          </div>
        </nav>
      </div>
    </div>

    <?php if($pagina_actual == "index"): ?>

      <!-- Carrousel -->
      <div class="row w-100 mx-0">
        <div class="col-12 px-0">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators z-1">

              <?php foreach($carousel as $i => $c): ?>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" class="<?= ($i==0) ? "active" : "" ?> carousel-button m-0 border-0" aria-current="true" aria-label="Slide <?= $i ?>"></button>
              
              <?php endforeach; ?>

            </div>
            <div class="carousel-inner">

              <?php foreach($carousel as $i => $c): ?>

                <div class="carousel-item <?= ($i==0) ? "active" : "" ?>">
                  <img src="<?= $c["imagem"] ?>" class="d-block" alt="<?= $c["imagem"] ?>">
                </div>

              <?php endforeach; ?>
              
            </div>          
          </div>
        </div>
      </div>
      
    <?php else: ?>

      <!-- Banner -->
      <div class="row w-100 mx-0">
        <div class="col-12 px-0">
          <img class="img-banner contactos w-100" src="<?= $banner["imagem"]; ?>" alt="<?= $banner["imagem"]; ?>">        
        </div>
      </div>

    <?php endif; ?>

  </header>
  <!-- Fim Header -->