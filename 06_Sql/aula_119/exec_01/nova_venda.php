<?php

require_once("data_base.php");
$produtos = selectSQL("SELECT * FROM produtos ORDER BY id DESC");

$form = !empty($_POST["id"]) && !empty($_POST["quantidade"]);

$nome_existe = true;
$quantidade_existe = true;

if($form) {
  $id = intval($_POST["id"]);  
  $quantidade = intval($_POST["quantidade"]);
    
  $nome_existe = selectSQLUnique("SELECT * FROM produtos WHERE id LIKE '$id'");
    
  if(!empty($nome_existe)) {
    $quantidade_existe = ($nome_existe["quantidade"] - $quantidade);

    if($quantidade_existe>=0) {
      $nome = $nome_existe["nome"];
      $preco = $nome_existe["preco"];
      $total = $quantidade * $preco;
      
      iduSQL("INSERT INTO venda_produtos (nome, preco, quantidade, total) VALUES ('$nome', '$preco', '$quantidade', '$total')");

      iduSQL("UPDATE produtos SET quantidade=$quantidade_existe WHERE id=$nome_existe[id]"); 

      header("Location: nova_venda.php?nome=$nome&preco=$preco&quantidade=$quantidade&total=$total");  
      exit();   
    }
  } 
}  

$form_2 = !empty($_GET["nome"]) && !empty($_GET["preco"]) && !empty($_GET["quantidade"]) && !empty($_GET["total"]);
if($form_2) {
  $novo_nome = $_GET["nome"];
  $novo_preco = floatval($_GET["preco"]);
  $nova_quantidade = $_GET["quantidade"];
  $novo_total = floatval($_GET["total"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 119.1</title>

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
          Nova Venda
        </h2>
        <br>

      </div>

      <div class="col-6 m-auto p-4 border border-5 border-primary rounded-5">

        <form action="" method="post">

          <label for="id">Id:</label>
          <input type="number" name="id" required min="1">
          <br><br>                   
          <label for="quantidade">Quantidade:</label>
          <input type="number" name="quantidade" min="0" required>
          <br><br> 
          <input class="btn btn-primary" type="submit" value="Vender!">

        </form>

      </div>
      
    </div>

    <div class="row">

      <div class="col-6 m-auto mt-3">

        <?php if($form_2): ?>
       
          <h2>
            Produto Vendido: (<?= $novo_nome; ?>) <br>
            Quantidade: (<?= $nova_quantidade; ?>) <br>
            Preço: (<?= number_format($novo_preco, 2); ?>) € <br>
            Total da Venda: (<?= number_format($novo_total, 2); ?>) €
          </h2>
          <br>  
                            
        <?php endif; ?>

        <?php if(empty($nome_existe)): ?>

          <h2>Produto Não Existe!</h2>

        <?php elseif($quantidade_existe<0): ?>

          <h2>Quantidade Inválida!</h2>
              
        <?php endif; ?>
       
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
 
  </div>
  
</body>
</html>