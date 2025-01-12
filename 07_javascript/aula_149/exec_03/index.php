<?php

require_once("data_base.php");
require_once("helpers/colaboradores_helper.php");

$produtos = selectSQL("SELECT * FROM produtos ORDER BY id DESC");
$id_edit = isset($_GET["id"]);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 150.1</title>

  <!-- Bootsrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Local CSS -->
  <link rel="stylesheet" href="public/css/style.css">

  <script>
    var pessoas = JSON.parse('<?= json_encode($produtos); ?>');
  </script>

  <!-- Local Javascript -->
  <script src="public/css/main.js" defer></script>
</head>
<body>

  <div class="container-fluid">

    <div class="row">
      <div class="col-12">

        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Loja PHP</a>
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
        <h1>Lista Produtos no Stock</h1>
        <br><br>
      </div>
    </div>     
    
    <div class="row">
      <div class="col-12">
        <table>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Marca</th>
            <th>Opções</th>
          </tr>

          <?php foreach ($produtos as $p): ?>

            <tr class="<?= ($id_edit == $p["id"]) ? "active" : ""; ?>">  
                          
              <td><?= $p["id"]; ?></td>
              <td><?= $p["nome"]; ?></td>
              <td><?= number_format($p["preco"], 2, ",", "."); ?>€</td>
              <td><?= $p["quantidade"]; ?></td>            
              <td><?= $p["marca"]; ?></td>
              <td>                                 
                <a class="d-inline-block" href="meio_editar.php?id=<?= $p["id"]; ?>">
                  <button class="btn btn-primary">Editar Produto</button>
                </a>
                <a href="meio_apagar.php?nome=<?= $p["nome"]; ?>&id=<?= $p["id"]; ?>">
                  <button class="btn btn-danger">Apagar Produto</button>
                </a> 
              </td>
                          
            </tr>

          <?php endforeach; ?>

        </table>
      </div>     
    </div>    
              
  </div>
  
</body>
</html>