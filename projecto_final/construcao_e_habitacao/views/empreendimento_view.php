<!-- Main -->
<main class="container-fluid">

  <?php if(!empty($empreendimento)): ?>

    <!-- Separador -->
    <div class="row">
      <div class="col-6 mx-auto text-center m-0 d-flex justify-content-center">
        <hr class="separador-main espacamento-separador-empreendimento">
      </div>
    </div>

    <!-- Bem-Vindo Empreendimentos -->
    <div class="row justify-content-center">
      <div class="col-10  mx-auto p-0 text-center poppins-regular cinza-escuro">        
        <h1 class="titulo-main m-0">Empreendimentos</h1>
        <h1 class="titulo-empreendimento m-0 poppins-light"><?= $empreendimento["titulo"]; ?></h1>
      </div>
    </div>

    <!-- Texto Empreendimentos -->
    <div class="row">
      <div class="col-10 px-2 px-xl-4 col-xl-9 mx-auto espacamento-texto-empreendimento cinza-escuro poppins-light texto-main"> 
        <div class="empreendimento-espacamento"> 
          <p>
            <?= $empreendimento["texto"]; ?>
          </p>
        </div>
        
      </div>
    </div>  

    <div class="row d-flex justify-content-center pb-4 pt-xl-4 gap-4">

      <?php for($i = 1; $i <= 4; $i++): ?>

        <?php if(!empty($empreendimento["imagem_$i"])): ?>

          <div class="col-auto p-1">        
            <img class="img-empreendimento" src="<?= $empreendimento["imagem_$i"]; ?>" alt="Imagem Empreendimento <?= $i; ?>">
          </div>

        <?php endif; ?>

      <?php endfor; ?>   

    </div>

  <?php else: ?>

    <!-- Separador -->
    <div class="row">
      <div class="col-6 mx-auto text-center m-0 d-flex justify-content-center">
        <hr class="separador-main espacamento-separador-empreendimento">
      </div>
    </div>

    <!-- Empreendimento Não Encontrado -->
    <div class="row justify-content-center">
      <div class="col-10  mx-auto p-0 text-center poppins-regular cinza-escuro">  
        <h1 class="titulo-main m-0">Empreendimento Não Encontrado</h1>
      </div>
    </div>

  <?php endif; ?>

</main>
<!-- Fim Main -->