<?php

require_once("data_base.php");

if(isset($_GET["id"])) {  
  $id = $_GET["id"];
  $produto_esp = selectSQLUnique("SELECT * FROM produtos WHERE id=$id");  
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
  <title>Exec 106.3</title>

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

    <?php if(!empty($produto_esp)): ?>
      
      <div class="row m-5 p-4 border border-dark">

        <div class="col-12 mb-3">
          <h3>Produto</h3>
          <h3>(Código - <?= $produto_esp["id"]; ?>)</h3>
          <h3>(Nome: <?= $produto_esp["nome"]; ?>)</h3>
        </div>

        <div class="col-12">
          <table>
            <tr>
              <th>Preço</th>
              <th>Quantidade</th>
            </tr>
            <tr>
              <td><?= $produto_esp["preco"]; ?></td>
              <td><?= number_format($produto_esp["quantidade"], 2); ?></td>            
            </tr>
          </table>
        </div>     
      
      </div>        

      <div class="row m-5 p-4 border border-dark">
        <div class="col-12">
          <h3>print_r do produto</h3>
          <pre><?php print_r($produto_esp); ?></pre>
        </div>
      </div>    

    <?php else: ?>

      <div class="row m-5 p-4 border border-dark">
        <div class="col-12">
          <h3>Não foi encontrado nenhum produto com código (<?= $id; ?>)</h3>
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