<?php

require_once("data_base.php");
  
$form = !empty($_GET["pagina"]);
$pagina = 1;
if($form) {
  $pagina = $_GET["pagina"];
}


$total_produtos = selectSQLUnique("SELECT count(*) AS total FROM produtos");
$total_elementos = intval($total_produtos["total"]);

$elementos_por_pagina = 3;
$total_paginas = ceil($total_elementos/$elementos_por_pagina);

$elementos_ignorados = (($pagina - 1) * $elementos_por_pagina);

$produtos = selectSQL("SELECT * FROM produtos LIMIT $elementos_por_pagina OFFSET $elementos_ignorados");


?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 110.1</title>

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

    <?php if(!empty($produtos)): ?>
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

            <?php foreach ($produtos as $p): ?>

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

    <?php endif; ?>    
              
    <div class="row">
      <div class="col-12">
        <form action="">
          <input type="number" name="pagina" min="1" max="<?= $total_paginas?>">
          <input type="submit" value="Go!">
        </form>
      </div>
    </div>
          
  </div>
  
</body>
</html>