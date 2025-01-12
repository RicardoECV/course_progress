

<main class="container-fluid">

  <div class="row">
    <div class="col-12 my-3">
      <h3>Contactos</h3>
    </div>
  </div>
  
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


</main>