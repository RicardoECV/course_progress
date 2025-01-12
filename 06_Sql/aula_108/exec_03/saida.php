<?php

require_once("data_base.php");

$form = isset($_GET["ordem"]) && isset($_GET["contagem"]);

if($form) {  
  $ordem = $_GET["ordem"];
  $contagem = $_GET["contagem"];
  $produtos_esp = selectSQL("SELECT * FROM produtos ORDER BY $ordem $contagem");   
}

else {
  header("Location: index.php");
  exit();
};

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 108.2</title>

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
        <h1>Exec SQL</h1>
      </div>
    </div>    

    <?php if($form): ?>
      <div class="row m-5 p-4 border border-5 border-primary rounded-5">

        <div class="col-12">
          <table>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th>Marca</th>
            </tr>

            <?php foreach ($produtos_esp as $p): ?>

              <tr>              
                <td><?= $p["id"]; ?></td>
                <td><?= $p["nome"]; ?></td>
                <td><?= number_format($p["preco"], 2, ",", "."); ?>€</td>
                <td><?= $p["quantidade"]; ?></td>            
                <td><?= $p["marca"]; ?></td>            
              </tr>

            <?php endforeach; ?>

          </table>
        </div>     
      
      </div>   

    <?php else: ?>
      <div class="row m-5 p-4 border border-5 border-primary rounded-5">
        <div class="col-12">
          <h3>Não foi encontrado nenhum produto com o nome (<?= $nome; ?>)</h3>
        </div>
      </div>

    <?php endif; ?>

    <div class="row">
      <div class="col-4 m-auto">
        <a href="index.php">
          <button>Reset!</button>
        </a>
      </div>
    </div>
      
  </div>
  
</body>
</html>