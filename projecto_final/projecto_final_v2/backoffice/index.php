<?php

require_once("../requires.php");

$form = !empty($_POST())

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backoffice</title>

  <!-- CSS Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</head>
<body>

  <main class="container-fluid">

    <div class="row">
      <div class="col-12 text-center">
        <h1>Backoffice</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-8 border mx-auto border-danger rounded rounded-5 text-center">
        <form action="" method="post">
          <input type="text" name="login" placeholder="login">
          <br><br>
          <input type="password" name="pw" placeholder="password">
          <br><br>
        </form>
      </div>
    </div>

  </main>
  
  
</body>
</html>