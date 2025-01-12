<?php

require_once("data_base.php");
  
$produtos = selectSQL("SELECT * FROM produtos"); 
$legenda = array_keys($produtos);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 113.1</title>

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
              <td>

                <a href="meio_editar.php?id=<?= $p["id"]; ?>">
                  <button class="botao_delete" name="delete">Editar</button>
                </a> 
                <br><br>
                <a href="meio_apagar.php?nome=<?= $p["nome"]; ?>&id=<?= $p["id"]; ?>">
                  <button class="botao_delete" name="delete">Apagar</button>
                </a>               
                                    
              </td>            
            </tr>

          <?php endforeach; ?>

        </table>
        
        <?php print_r($legenda[0]); ?>
      </div>
    </div>  
          
  </div>
  
</body>
</html>