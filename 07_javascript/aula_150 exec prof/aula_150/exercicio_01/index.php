<?php

require_once("base_dados.php");

$produtos = selectSQL("SELECT * FROM produtos");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 145.1</title>

  <!-- CSS LOCAL -->
  <link rel="stylesheet" href="estilo.css">
  
  <!-- JS LOCAL -->
  <script src="Produto.js" defer></script>
  <script src="main.js" defer></script>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
  
  <header class="container-fluid">

    <div class="row">
      <div class="col-12 px-0">
        <nav class="navbar navbar-expand-lg bg-danger navbar-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <div class="d-flex" role="search">
                <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#carrinho">
                  <i class="bi bi-cart2"></i>
                </button>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-12">


        <!-- Modal -->
        <div class="modal fade" id="carrinho" tabindex="-1" aria-labelledby="carrinho" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="carrinho">Carrinho de Compras</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div id="lista" class="container-fluid text-center"></div>

                <div class="container-fluid">
                  <div class="row mt-4 align-items-center text-end fs-5 text-uppercase">
                    <div class="col">Total: ( <span id="total">0.00</span> € )</div>
                  </div>
                </div>

              </div>
              <form action="" class="modal-footer">
                <input type="hidden" id="total_formulario" name="total_formulario">
                <button class="btn btn-primary">Avançar com a compra</button>
              </form>
            </div>
          </div>
        </div>


      </div>
    </div>

  </header>

  <main class="container my-5">

    <div class="row">
      <div class="col-12 d-flex justify-content-center flex-wrap gap-5">

        <?php foreach($produtos as $p): ?>

          <div class="card text-center" style="width: 18rem;">
            <img src="<?= $p["imagem"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $p["nome"]; ?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text"><?= number_format($p["preco"], 2) ?> €</p>
              <p class="card-text">
                <input type="number" oninput="verificarInput(this)" class="quantidade" id="quantidade_<?= $p['id']; ?>" min="1" value="1">
              </p>
              <button class="btn btn-danger" onclick="addCarrinho(<?= $p['id']; ?>, quantidade_<?= $p['id']; ?>.value,'<?= $p['nome']; ?>', <?= $p['preco']; ?>, '<?= $p['imagem']; ?>')">Add ao Carrinho</button>
            </div>
          </div>

        <?php endforeach; ?>

      </div>
    </div>

  </main>

  <footer class="container-fluid text-center bg-danger py-3 text-white">
    <div class="row">
      <div class="col-12">
        COPYRIGHT © <?= date("Y"); ?> CODEMASTER
      </div>
    </div>
  </footer>


</body>
</html>