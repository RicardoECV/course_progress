<main class="container-fluid">

  <div class="row my-4">
    <div class="col-12">
      <h1>
        Viagens 
      </h1>
    </div>
  </div>

  <div class="row">
    <div class="col-12 my-2 texto_index">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, atque vero perspiciatis id fuga corporis assumenda doloremque distinctio soluta facere dolorem facilis ex inventore dolores ipsa accusamus debitis nulla, totam ducimus ad odio culpa? Natus aut ex iste aperiam hic?
    </div>

    <div class="col-12 my-2 texto_index">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, atque vero perspiciatis id fuga corporis assumenda doloremque distinctio soluta facere dolorem facilis ex inventore dolores ipsa accusamus debitis nulla, totam ducimus ad odio culpa? Natus aut ex iste aperiam hic?
    </div>

    <div class="col-12 my-2 texto_index">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, atque vero perspiciatis id fuga corporis assumenda doloremque distinctio soluta facere dolorem facilis ex inventore dolores ipsa accusamus debitis nulla, totam ducimus ad odio culpa? Natus aut ex iste aperiam hic?
    </div>
  </div>

  <div class="row my-5">
    <div class="col-12 d-flex justify-content-center gap-5 flex-wrap">

      <?php foreach ($viagens as $i => $v): ?>

        <div class="card" style="width: 18rem;">
          <img src="<?= $v->imagem; ?>" class="card-img-top" alt="<?= $v->nome; ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $v->nome; ?></h5>
            <p class="card-text"><?= substr(strip_tags($v->texto), 0, $config["total_caracteres"]); ?></p>
            <a href="viagem.php?posicao=<?= $i; ?>" class="btn btn-primary">Ver Mais</a>
          </div>
        </div>

      <?php endforeach; ?>
           
    </div>
  </div>  

</main>