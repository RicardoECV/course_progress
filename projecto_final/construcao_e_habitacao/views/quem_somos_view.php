<!-- Main -->
<main class="container-fluid">

  <!-- Separador -->
  <div class="row">
    <div class="col-6 mx-auto text-center m-0 d-flex justify-content-center">
      <hr class="separador-main espacamento-separador-main-quem">
    </div>
  </div>

  <!-- Bem-Vindo Quem Somos -->
  <div class="row justify-content-center">
    <div class="col-10  mx-auto p-0 text-center poppins-regular cinza-escuro">        
      <h1 class="titulo-main m-0"><?= $quem_somos["titulo"]; ?></h1>
    </div>
  </div>

  <!-- Texto Quem Somos -->
  <div class="row">
    <div class="col-10 px-2 px-xl-4 col-xl-9 mx-auto espacamento-texto-main-quem-somos cinza-escuro poppins-light texto-main"> 
      <div class="quem-somos-espacamento">         
        <?= $quem_somos["texto"]; ?>
      </div>
      
    </div>
  </div>    

</main>
<!-- Fim Main -->