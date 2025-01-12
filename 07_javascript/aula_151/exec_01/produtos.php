<?php

require_once("data_base.php");

$elementos = selectSQL("SELECT * FROM venda_produtos");
$total=0;

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 121.1</title>
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Loja PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="novo_produto.php">Registar Novo Produto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nova_venda.php">Nova Venda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="produtos.php">Lista de Vendas</a>
                </li>                                
              </ul>              
            </div>
          </div>
        </nav>
        
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <br>
        <h1>Lista de Vendas</h1>
      </div>
    </div>
    <div class="row m-5 p-4 border border-5 border-primary rounded-5">
      <div class="col-12">

        <table>
          <tr>
                       
            <th class="text-uppercase">ID</th>            
            <th class="text-uppercase">Nome</th>            
            <th class="text-uppercase">Preço</th>            
            <th class="text-uppercase">Quantidade</th>            
            <th class="text-uppercase">Total</th>            
                        
          </tr>

          <?php foreach ($elementos as $e): ?>
            <tr>        

              <?php $produto = selectSQLUnique("SELECT * FROM produtos WHERE id=$e[id_produto]"); ?>
                               
              <td><?= $e["id_produto"]; ?></td>
              <td><?= $produto["nome"]; ?></td> 
                
              <td><?= $e["preco"]; ?></td>  
              <td><?= $e["quantidade"]; ?></td>  
              <td><?= $e["total"]; ?></td>  
                            
              <?php $total += $e["total"]; ?> 

            </tr>
          <?php endforeach; ?>

        </table>
        
        <h2><br>Total de Vendas (<?= $total ?>) €</h2>
      </div>
    </div>  
  </div>

</body>
</html>