<!-- Main -->
<main class="container-fluid px-0">

  <!-- Separador -->
  <div class="row mx-0">
    <div class="col-6 mx-auto text-center m-0 d-flex justify-content-center">
      <hr class="separador-main espacamento-separador-noticias">
    </div>
  </div>

  <!-- Bem-Vindo Noticias -->
  <div class="row mx-0 justify-content-center">
    <div class="col-10  mx-auto p-0 pb-4 text-center poppins-regular cinza-escuro">        
      <h1 class="titulo-main m-0">Notícias</h1>
    </div>
  </div>      

  <!-- Cards Noticias -->
  <div class="row d-flex flex-wrap justify-content-center gap-xl-4 gap-4 pt-xl-4 px-xl-0 mx-0">

    <?php foreach($noticias as $n): ?>
      <div class="col-xl-4 col-sm-6 col-10 px-xl-0 px-1">
        <div class="card card-top h-100 border-0">
          <img class="card-img-top img-card img-card-noticias" src="<?= $n["imagem"]; ?>" alt="<?= $n["imagem"]; ?>">
          <div class="card-body card-body-noticias d-flex flex-column poppins-regular cinza-escuro p-0">            
            <h5 class="card-title titulo-card-noticias m-0"><?= $n["titulo"]; ?></h5> 
            <p class="card-text poppins-light texto-card-noticias">
              <?= $n["texto"]; ?>
            </p>     
          </div>          
        </div> 
      </div> 
    <?php endforeach; ?>  
          
  </div>

  <!-- Paginacao -->
  <div class="row m-0">
    <div class="col-12 text-center mt-xl-5 mb-xl-0 mt-4 mb-5 d-flex justify-content-center gap-1 gap-xl-2">

      <form action="">

        <button name="pagina" value="<?= (($pagina-1) < 1) ? $pagina : $pagina-1; ?>" class="btn botao-pagina p-0 text-decoration-none cinza-escuro"><</button>

        <?php for($i = 1; $i <= $total_paginas; $i++): ?>

          <button name="pagina" class="btn botao-pagina p-0 text-decoration-none cinza-escuro <?= ($pagina == $i) ? "active" : ""; ?>" value="<?= $i ?>"><?= $i ?></button>         

        <?php endfor; ?>
        
        <button name="pagina" value="<?= ($pagina+1 > $total_paginas) ? $pagina : $pagina+1; ?>" class="btn botao-pagina p-0 text-decoration-none cinza-escuro">></button>

      </form>

    </div>
  </div>

</main>
<!-- Fim Main -->
