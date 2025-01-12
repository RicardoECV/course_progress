<?php

require_once("data_base.php");

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);

if($form) {
  $login = $_POST["login"];
  $senha = $_POST["senha"];
  
  $usuario = selectSQLUnique("SELECT * FROM colaboradores WHERE login='$login' AND pw='$senha'");

  if(!empty($usuario)) {
    echo "Bem vindo $login!";
  }
  else {
    echo "Login ou pw errados!";
  }; 
  
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 114.3</title>

  <!-- Bootsrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Local CSS -->
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <h1>Exec Session</h1>
      </div>
    </div>    
    
    <div class="row m-5 p-4 border border-5 border-primary rounded-5">
      <div class="col-12">

        <form action="" method="post">

          <input type="text" name="login" placeholder="login" required>
          <br>
          <input type="password" name="senha" placeholder="senha" required>
          <br><br>
          <input type="submit">

        </form>
                
      </div>
    </div>  
          
  </div>
  
</body>
</html>