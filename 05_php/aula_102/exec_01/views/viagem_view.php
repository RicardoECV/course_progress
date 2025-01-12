<main class="container-fluid">

  <div class="row">

    <div class="col my-5 ">

      <h1 class="mb-5"><?= $viagem_esp->nome; ?></h1>

      <img class="float-start me-5 w-50" src="<?= $viagem_esp->imagem; ?>" alt="">

      <p class="mx-4 texto_viagem">
        <?= $viagem_esp->texto; ?>
      </p>

    </div>
    
  </div>

</main>