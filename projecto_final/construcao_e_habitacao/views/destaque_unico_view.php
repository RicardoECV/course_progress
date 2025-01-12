<!-- Main -->
<main class="container-fluid">

  <?php if(!empty($destaque_unico)): ?>
    <!-- Separador -->
    <div class="row">
      <div class="col-6 mx-auto text-center m-0 d-flex justify-content-center">
        <hr class="separador-main espacamento-separador-empreendimento">
      </div>
    </div>

    <!-- Bem-Vindo Destaque -->
    <div class="row justify-content-center">
      <div class="col-10  mx-auto p-0 text-center poppins-regular cinza-escuro">        
        <h1 class="titulo-main m-0">Destaques</h1>
        <h1 class="titulo-empreendimento m-0 poppins-light"><?= $destaque_unico["titulo"]; ?></h1>
      </div>
    </div>

    <!-- Texto Destaque -->
    <div class="row">
      <div class="col-10 px-2 px-xl-4 col-xl-9 mx-auto espacamento-texto-empreendimento cinza-escuro poppins-light texto-main"> 
        <div class="empreendimento-espacamento"> 
          <?= $destaque_unico["texto"]; ?>
        </div>
        
      </div>
    </div> 

    <div class="row justify-content-end">
      <div class="col-lg-6 col-12 text-center my-4 mt-lg-5">
        <a href="destaques.php" class="botao-destaque text-uppercase text-decoration-none cinza-escuro poppins-regular">Voltar Para Destaques</a>
      </div>
    </div>

    <?php else: ?>
      <!-- Separador -->
      <div class="row">
        <div class="col-6 mx-auto text-center m-0 d-flex justify-content-center">
          <hr class="separador-main espacamento-separador-empreendimento">
        </div>
      </div>

      <!-- Destaque Não Encontrado-->
      <div class="row justify-content-center">
        <div class="col-10  mx-auto p-0 text-center poppins-regular cinza-escuro">        
          <h1 class="titulo-main m-0">Destaque Não Encontrado</h1>          
        </div>
      </div>
    <?php endif; ?>


</main>
<!-- Fim Main -->