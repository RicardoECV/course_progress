<!-- Main -->
<main class="container-fluid">

  <!-- Separador -->
  <div class="row">
    <div class="col-6 mx-auto text-center m-0 d-flex justify-content-center">
      <hr class="separador-main espacamento-separador-main-contactos">
    </div>
  </div>

  <!-- Bem-Vindo Contactos -->
  <div class="row justify-content-center">
    <div class="col-10  mx-auto p-0 text-center poppins-regular cinza-escuro">        
      <h1 class="titulo-main m-0">Contactos</h1>
    </div>
  </div>

  <!-- Area Contactos -->
  <div class="row d-flex justify-content-center espacamento-contactos gap-lg-5 gap-3">
    <div class="col-xl-3 col-10 d-flex flex-column gap-lg-4 gap-3 cinza-escuro">
      <div>
        <h4 class="text-uppercase poppins-medium texto-contacto-campo my-0">Morada</h4>
        <h4 class="poppins-medium texto-contacto-campo my-0"><?= $contactos["morada"]; ?>
        </h4>
      </div>
      <div>
        <h4 class="mb-lg-2 mb-0 text-uppercase poppins-medium texto-contacto-campo">Telefone</h4>
        <h4 class="poppins-regular texto-contacto-campo my-0"><?= $contactos["telefone"]; ?></h4>
      </div>
      <div>
        <h4 class="mb-lg-2 mb-0 text-uppercase poppins-medium texto-contacto-campo">Fax</h4>
        <h4 class="poppins-regular texto-contacto-campo my-0"><?= $contactos["fax"]; ?></h4>
      </div>
      <div>
        <h4 class="mb-lg-2 mb-0 text-uppercase poppins-medium texto-contacto-campo">E-mail</h4>
        <h4 class="poppins-regular texto-contacto-campo my-0"><?= $contactos["email"]; ?></h4>
      </div>        
    </div>
    <div class="col-xl-5 col-10 ms-xl-4">
      <form action="" class="d-flex flex-column gap-2 cinza-escuro">

        <div class="d-flex flex-column ">
          <label for="" class="text-uppercase texto-contacto-campo poppins-medium">*Nome</label>
          <input type="text" class="contactos-input poppins-light" placeholder="Insira aqui o seu nome">
        </div>
        
        <div class="d-flex flex-column">
          <label for="" class="text-uppercase texto-contacto-campo poppins-medium">*E-mail</label>
          <input type="text" class="contactos-input poppins-light" placeholder="Insira aqui o seu e-mail">
        </div>

        <div class="d-flex flex-column">
          <label for="" class="text-uppercase texto-contacto-campo poppins-medium">*Telefone</label>
          <input type="text" class="contactos-input poppins-light" placeholder="Insira aqui o seu telefone">
        </div>

        <div class="d-flex flex-column">
          <label for="" class="text-uppercase texto-contacto-campo poppins-medium">*Assunto</label>
          <input type="text" class="contactos-input poppins-light" placeholder="Insira aqui o assunto">
        </div>

        <div class="d-flex flex-column">
          <label for="" class="text-uppercase texto-contacto-campo poppins-medium">*Mensagem</label>
          <textarea class="contactos-area-texto poppins-light" name="" placeholder="Insira aqui a sua mensagem"></textarea>
        </div>         

        <div class="d-flex flex-column flex-xxl-row justify-content-between espacamento">
          <div class="cinza-escuro">
            <p class="m-0 poppins-light contactos-campo-obrigatorio">* Campos de preenchimento obrigatório</p>
            <div class="mt-1 gap-2 d-lg-block d-flex">
              <input class="align-self-start" type="checkbox" name="copia_email">
              <label for="copia_email" class="poppins-light contactos-copia-email">Quero receber uma cópia desta mensagem no meu e-mail.</label>
            </div>
          </div>            
          <div class="align-self-xxl-end">
            <img class="img-recaptcha" src="public/images/logos/recaptcha.png" alt="Imagem Recaptcha">
          </div>           
        </div>  
        <div class="align-self-lg-end align-self-center mt-xl-1 py-4">
          <button class="text-uppercase botao-contactos poppins-regular cinza-escuro">Enviar</button>
        </div>          
                            
      </form>

    </div>
  </div>

</main>
<!-- Fim Main -->