<!-- Main -->
<main class="container-fluid">

  <!-- Separador -->
  <div class="row">
    <div class="col-6 mx-auto text-center m-0 d-flex justify-content-center">
      <hr class="separador-main espacamento-separador-centro-ferias">
    </div>
  </div>

  <!-- Bem-Vindo Centro de Ferias -->
  <div class="row justify-content-center">
    <div class="col-10 mx-auto p-0 text-center poppins-regular cinza-escuro">        
      <h1 class="titulo-main m-0"><?= $centro_ferias["titulo"]; ?></h1>        
    </div>
  </div>

  <!-- Texto Centro de Ferias -->    
  <div class="row">
    <div class="col-10 px-2 px-xl-4 col-xl-9 mx-auto espacamento-texto-main-centro-ferias cinza-escuro poppins-light texto-centro-ferias"> 
      <div class="centro-ferias-espacamento">         
        <?= $centro_ferias["texto"]; ?>
      </div>      
    </div>
  </div>     

</main>
<!-- Fim Main -->