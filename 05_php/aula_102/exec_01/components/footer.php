<?php

  if($pagina_actual == "contactos") {
    $footer_contacto = false;
  }
  else {
    $footer_contacto = true;
  }

?>  
  
  <footer class="container-fluid py-4 bg-danger text-white">

    <?php if($footer_contacto): ?>
      <div class="row">

        <div class="col">
          <h4>Morada</h4>
          <p><?= $contactos[0]->morada; ?></p>
        </div>

        <div class="col">
          <h4>Telefone</h4>
          <p><?= $contactos[0]->telefone; ?></p>
        </div>

        <div class="col">
          <h4>Email</h4>
          <p><?= $contactos[0]->email; ?></p>
        </div>

      </div>
    <?php endif; ?>

    <div class="row">
      <div class="col-12 text-center">
        Copyright &copy <?= date("Y"); ?>
      </div>
    </div>
    
  </footer>

</body>
</html>
  