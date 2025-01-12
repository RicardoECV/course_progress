  <!-- Footer -->
  <footer class="container-fluid">   

    <!-- Contactos Footer -->
    <?php if(!$footer_contacto): ?>
      <div class="row img-fundo-contactos espacamento-footer-top justify-content-center">

      <div class="col-12 text-center filtro-img">
        <hr class="text-white separador-footer-top align-self-center mx-auto">
        <h1 class="text-white poppins-regular text-capitalize titulo-contactos">Contactos</h1>
      </div>

      <div class="col-auto flex-fill filtro-img"></div>

      <div class="col-lg-3 col-12 text-center text-white filtro-img p-0">
        <img class="img-contactos" src="public/images/buttons_icons/tel.svg" alt="Imagem Telefone">
        <p class="mx-0 texto-contactos poppins-regular"><?= $contactos["telefone"]; ?></p>
      </div>

      <div class="col-lg-3 col-12 px-2 px-xxl-0 text-center text-white filtro-img p-0">
        <img class="img-contactos" src="public/images/buttons_icons/loc.svg" alt="Imagem Telefone">
        <p class="mx-xl-3 texto-contactos poppins-regular"><?= $contactos["morada"]; ?></p>       
      </div>

      <div class="col-lg-3 col-12 text-center text-white filtro-img p-0">
        <img class="img-contactos" src="public/images/buttons_icons/mail.svg" alt="Imagem Telefone">
        <p class="mx-0 texto-contactos poppins-regular contactos-mail"><?= $contactos["email"]; ?></p>
      </div>

      <div class="col-auto flex-fill filtro-img"></div>

      </div>
    <?php endif; ?>
  
    <!-- Mapa Footer -->
    <div class="row">
      <div class="col-12 p-0 espacamento-mapa">        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99658.26145283013!2d-9.188339123133304!3d38.68747773213665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ecb42c3c29c4b%3A0x3002dcadcf52513f!2sBel%C3%A9m%20Tower!5e0!3m2!1sen!2spt!4v1730834710993!5m2!1sen!2spt" class="w-100 img-mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <!-- Siga-nos Footer -->
    <div class="row img-fundo-facebook">

      <!-- Logo Facebook Footer -->
      <div class="col-12 text-center filtro-img ">
        <img class="img-facebook" src="public/images/buttons_icons/facebook.svg" alt="Logo Facebook">
      </div>      
      <div class="col-12 text-center text-white filtro-img">
        <a href="<?= $contactos["facebook"]; ?>" class="titulo-facebook poppins-regular text-decoration-none d-block text-white">Siga-nos no Facebook</a>
      </div>

      <!-- Separador Footer -->
      <div class="col-12 filtro-img p-0">
        <hr class="separador-footer-bot m-0">
      </div>

      <!-- Navbar Footer -->
      <div class="col-xxl-11 px-xxl-0 d-lg-block d-none filtro-img">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
          <div class="container-fluid px-0 pe-xxl-5 ps-xl-0 me-xxl-2">            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-xxl-end justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav align-self-center me-xl-5">
                <li class="nav-item">
                  <a class="nav-link text-uppercase p-0 poppins-regular <?= ($pagina_actual == "index") ? "active" : "" ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-uppercase p-0 poppins-regular <?= ($pagina_actual == "quem_somos") ? "active" : "" ?>" href="quem_somos.php">Quem somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-uppercase p-0 poppins-regular <?= ($pagina_actual == "socios") ? "active" : "" ?>" href="socios.php">Sócios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-uppercase p-0 poppins-regular <?= ($pagina_actual == "noticias") ? "active" : "" ?>" href="noticias.php">Notícias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-uppercase p-0 poppins-regular <?= ($pagina_actual == "destaques" || $pagina_actual == "destaque_unico") ? "active" : "" ?>" href="destaques.php">Destaques</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-uppercase p-0 poppins-regular <?= ($pagina_actual == "empreendimento") ? "active" : "" ?>" href="empreendimento.php?id=1">Empreendimentos</a>
                </li>                
                <li class="nav-item">
                  <a class="nav-link text-uppercase p-0 poppins-regular <?= ($pagina_actual == "centro_ferias") ? "active" : "" ?>" href="centro_ferias.php">Centro de férias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-uppercase p-0 poppins-regular <?= ($pagina_actual == "contactos") ? "active" : "" ?>" href="contactos.php">Contactos</a>
                </li>               
              </ul>              
            </div>
          </div>
        </nav>
      </div>

      <!-- Espaçamento Navbar -->
      <div class="col-xxl-1 col-0 filtro-img"></div>

      <!-- Espaçamento Copyright -->
      <div class="col-xxl-1 col-0 filtro-img px-5"></div>

      <!-- Copyright Footer -->
      <div class="col-xxl-10 px-xl-5 py-2 col-12 filtro-img px-lg-3">
        <a href="https://mediamaster.pt/" class="mx-xl-5 px-xl-3 text-white texto-copy text-decoration-none poppins-regular d-block">Copyright &copy <?= date("Y"); ?> Grupo MediaMaster. Todos os direitos reservados.</a>
      </div>

      <!-- Espaçamento Copyright -->
      <div class="col-xxl-1 col-0 filtro-img px-5"></div>
    </div>

  </footer>
  <!-- Fim Footer -->
  
</body>
</html>