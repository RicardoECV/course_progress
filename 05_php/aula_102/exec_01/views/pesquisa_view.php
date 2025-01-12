<main class="container-fluid">

  <div class="row my-4">
    <div class="col-12">
      <h1>
        Resultado da Pesquisa (<?= $pesquisa; ?>)
      </h1>
    </div>
  </div>

  <div class="row my-5">
    <div class="col-12 d-flex justify-content-center gap-5 flex-wrap">
      
      <?php foreach ($resultados as $i => $v): ?>

        <?php ?>
          <div class="card" style="width: 18rem;">

            <img src="<?= $v->imagem; ?>" class="card-img-top" alt="<?= $v->nome; ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $v->nome; ?></h5>
              <p class="card-text"><?= substr(strip_tags($v->texto), 0, $config["total_caracteres"]); ?></p>
              <a href="viagem.php?posicao=<?= $v->id; ?>" class="btn btn-primary">Ver Mais</a>
            </div>

          </div>

      <?php endforeach; ?>

      <?php if(count($resultados) == 0): ?>

        <h2 class="text-danger">Resultados não encontrados</h2>

      <?php endif; ?>
           
    </div>
  </div>  

</main>