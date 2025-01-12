<?php

require_once("data_base.php");

$form = !empty($_POST["nome"]) && !empty($_POST["preco"]) && isset($_POST["quantidade"]) && (strlen($_POST["quantidade"]) > 0);
$form = $form && !empty($_POST["marca"]) && !empty($_POST["codigo"]);

if($form) {
  $nome = $_POST["nome"];
  $preco = intval($_POST["preco"]);
  $quantidade = intval($_POST["quantidade"]);
  $marca = intval($_POST["quantidade"]);
  $codigo = intval($_POST["codigo"]);

  $repetida = selectSQLUnique("SELECT * FROM produtos WHERE nome LIKE '$nome'");

  if(empty($repetida)) {
    iduSQL("INSERT INTO produtos (nome, preco, quantidade, marca, codigo) VALUES ('$nome', '$preco', '$quantidade', '$marca', '$codigo')");
    header("Location: novo_produto.php?nome=$nome");
    exit();  
  }   
}

$form_2 = !empty($_GET["nome"]);
if($form_2) {$novo_nome = $_GET["nome"];}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 121.3</title>

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

      <div class="col-12 pt-4">

        <h2>
          Novo Produto
        </h2>
        <br>

      </div>

      <div class="col-6 m-auto p-4 border border-5 border-primary rounded-5">

        <form action="" method="post">

          <label for="nome">Nome:</label>
          <input type="text" name="nome" required>
          <br><br>
          <label for="preco">Preço</label>
          <input type="number" name="preco" step="0.01" min="0" required>
          <br><br>
          <label for="marca">Marca:</label>
          <input type="text" name="marca" required>
          <br><br>
          <label for="quantidade">Quantidade:</label>
          <input type="number" name="quantidade" min="0" required>
          <br><br> 
          <label for="codigo">Código:</label>
          <input type="number" name="codigo" min="0" required>
          <br><br><br>
          <input class="btn btn-primary" type="submit" value="Criar">

        </form>

      </div>
      
    </div>

    <div class="row">

      <div class="col-6 m-auto mt-3">

        <?php if($form_2): ?>
       
          <h2>
            Produto (<?= $novo_nome; ?>)!
          </h2>
          <br>                
         
        <?php endif; ?>

        <?php if(!empty($repetida)): ?>

          <h2>Produto já existente!</h2>

        <?php endif; ?>

      </div> 

    </div>

    <div class="row">

      <div class="col-2 m-auto p-4 mt-3">
        <a href="index.php">
          <button class="btn btn-danger">Voltar</button>
        </a>
      </div>

    </div>      
    
  </div>
  
</body>
</html>