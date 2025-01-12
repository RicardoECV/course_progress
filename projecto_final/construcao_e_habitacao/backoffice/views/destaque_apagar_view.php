<main class="container-fluid">

  <?php if(!empty($destaque)): ?>

    <div class="row">
      <div class="col-12 text-center p-5">
        <h2>Deseja Apagar o Destaque (<?= $destaque["titulo"]; ?>) ?</h2>      
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-danger p-3 m-4">
          <a class="text-decoration-none text-white" href="destaque_apagado.php?id=<?= $destaque["id"]; ?>">Sim</a>
        </button>
        
        <button class="btn btn-primary p-3 m-4">
          <a class="text-decoration-none text-white" href="destaques.php">Não</a>
        </button>
      </div>
    </div>

  <?php else: ?>

    <div class="row">
      <div class="col-12 text-center p-4">
        <h2 class="text-danger">Destaque Não Encontrado</h2>
      </div>
    </div>

  <?php endif; ?>

</main>