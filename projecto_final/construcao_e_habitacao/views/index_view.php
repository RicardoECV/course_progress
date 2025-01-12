<!-- Main -->
<main class="container-fluid">

  <!-- Separador -->
  <div class="row">
    <div class="col-6 mx-auto text-center m-0 d-flex justify-content-center">
      <hr class="separador-main espacamento-separador-main">
    </div>
  </div>

  <!-- Bem-Vindo Main -->
  <div class="row justify-content-center">
    <div class="col-10  mx-auto p-0 text-center poppins-regular cinza-escuro">        
      <h1 class="titulo-main m-0">Bem-vindo à<br> Cooperativa de Construção e Habitação Tripeira</h1>
    </div>
  </div>

  <!-- Texto Main -->
  <div class="row">
    <div class="col-10 col-xl-9 px-5 mx-auto espacamento-texto-main cinza-escuro poppins-light texto-main" >
      <?= substr(strip_tags($quem_somos["texto"]), 0, 500); ?>...
    </div>
  </div>

  <!-- Botão Ver Mais -->
  <div class="row">
    <div class="col-12 text-center d-flex justify-content-center">        
      <a class="text-decoration-none align-content-center text-dark botao-ver-mais text-uppercase" href="quem_somos.php">
        Ver Mais          
      </a>   
    </div>
  </div>

  <!-- Separador -->
  <div class="row espacamento-separador-main-2">
    <div class="col-4 mx-auto d-flex justify-content-center ">
      <hr class="separador-main m-0">
    </div>
  </div>

  <!-- Destaques Titulo Main-->
  <div class="row">
    <div class="col-12 text-center cinza-escuro poppins-regular text-capitalize">
      <h1 class="titulo-main m-0 espacamento-cards-main">Destaques</h1>
    </div>
  </div>  
  
  <!-- Cards Destaques -->
  <div class="row d-flex flex-wrap justify-content-center column-gap-xl-1 gap-md-4 gap-sm-2 px-xl-5">

    <?php foreach($destaques_h as $d): ?>

      <div class="col-xxl-3 col-md-4 col-sm-6 col-10 pb-xl-3 px-1">
        <div id="card-mobile" class="card card-top card-top-home h-100 ">
          <img class="card-img-top img-card-home" src="<?= $d["imagem"] ?>" alt="<?= $d["imagem"] ?>">
          <div class="card-body card-body-home d-flex flex-column poppins-regular cinza-escuro p-0">            
            <h5 class="card-title titulo-card m-0"><?= $d["titulo"] ?></h5> 
            <p class="card-text poppins-light texto-card">
              <?= substr(strip_tags($d["texto"]),0, 75); ?>...
            </p> 
            <a href="destaque_unico.php?id=<?= $d["id"] ?>" class="text-decoration-none text-black botao-ver-mais-card m-auto text-uppercase d-flex justify-content-center align-items-center align-self-center ">Ver Mais</a>           
          </div>          
        </div> 
      </div> 

    <?php endforeach; ?>
                
  </div>

</main>
<!-- Fim Main -->
