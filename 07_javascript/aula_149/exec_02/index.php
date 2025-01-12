<?php

$form = !empty($_GET["email"]) && !empty($_GET["texto"]);

if($form) {  

  // codigo google
  if($google->sucess) {
    $email = $_GET["email"];
    $texto = $_GET["texto"];  
    mail($email, "Teste Email!", $texto);
  }

}

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 149.2</title>
  <link rel="stylesheet" href="style.css">

  <!-- RECAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

  <header>
    <h1>Enviar Email!</h1>
  </header>

  <main>

    <div class="box">
      <form action="">
        <input type="nome" name="nome" placeholder="Nome">
        <br><br>
        <input type="email" name="email" placeholder="E-mail">
        <br><br>
        <textarea placeholder="Mensagem" name="texto" cols="50" rows="10" id=""></textarea>
        <br><br>
        <div>Site key aqui e recapcha</div>
        <br><br>
        <button>Enviar!</button>    
        <br><br>    
      </form>
    </div> 

    <div class="box">
      <a href="https://wa.me/14494984949" target="_blank">Contacto Whatsapp</a>      
    </div>
  </main>
  
</body>
</html>