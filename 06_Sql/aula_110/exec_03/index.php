<?php

require_once("data_base.php");
 
$where = "";
$col = "id";
$direcao = "ASC";
$maior = null;
$menor = null;

$form_filter = isset($_GET["col"]) && $_GET["direcao"];

if($form_filter) {
  $col = $_GET["col"];
  $direcao = $_GET["direcao"];
}

$form_menor = !empty($_GET["menor"]);
if ($form_menor) {
  $menor = $_GET["menor"];
  $where .= "WHERE preco >= $menor";
}

$form_maior = !empty($_GET["maior"]);
if ($form_maior) {
  $maior = $_GET["maior"];
  if($menor != null) {
    $where .=" AND preco <= $menor";
  } 
  $where .= "WHERE preco >= $maior";
}

$pagina = 1;
if(!empty($_GET["pagina"])) {
  $pagina = $_GET["pagina"];
}

$total_produtos = selectSQLUnique("SELECT count(*) AS total FROM produtos $where");
$total_elementos = intval($total_produtos["total"]);

$elementos_por_pagina = 3;
$total_paginas = ceil($total_elementos/$elementos_por_pagina);

if ($pagina < 1 || $pagina > $total_paginas) {$pagina = 1;} 
elseif ($pagina > $total_paginas) {$pagina = $total_paginas;}
$elementos_ignorados = (($pagina - 1) * $elementos_por_pagina);

$abreviacao = 2;
$botao_inicio = $pagina - $abreviacao;
$botao_fim = $pagina + $abreviacao;


$produtos = selectSQL("SELECT * FROM produtos $where ORDER BY $col $direcao  LIMIT $elementos_por_pagina OFFSET $elementos_ignorados");



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
    
    <div class="row">
      <div class="col-12">

        <form action="">

          <label for="col">Ordenar por: </label>
          <select name="col" id="col">
            <option value="id" <?= ($col == "id") ? "selected" : ""; ?>>ID</option>
            <option value="nome" <?= ($col == "nome") ? "selected" : ""; ?>>Nome</option>
            <option value="preco" <?= ($col == "preco") ? "selected" : ""; ?>>Preço</option>
            <option value="quantidade" <?= ($col == "quantidade") ? "selected" : ""; ?>>Quantidade</option>
            <option value="marca" <?= ($col == "marca") ? "selected" : ""; ?>>Marca</option>
          </select>

          <br><br>

          <label for="asc">Crescente</label>
          <input type="radio" name="direcao" id="asc" value="ASC" <?= (!$form_filter || $form_filter && $direcao=="ASC") ? "checked" : ""; ?>
          ><br>
          <label for="desc">Decrescente</label>
          <input type="radio" name="direcao" id="desc" value="DESC" <?= ($form_filter && $direcao=="DESC") ? "checked" : ""; ?>>
          <br><br>

          <input type="number" placeholder="Preço Maior" min="0" step="0.01" name="maior" value="<?= ($maior != null) ? number_format($maior,2) : ""; ?>">
          <input type="number" placeholder="Preço Menor" min="0" step="0.01" name="menor">

          <br><br>
          <input type="submit">

        </form>

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

          
          <input type="hidden" name="col" value="<?= $col; ?>">
          <input type="hidden" name="direcao" value="<?= $direcao; ?>">
          <?php if($menor != null): ?>
            <input type="hidden" name="menor" value="<?= $menor; ?>">
          <?php endif; ?>
          <?php if($maior != null): ?>
            <input type="hidden" name="maior" value="<?= $maior; ?>">
          <?php endif; ?>
        
              
          <button name="pagina" value="<?= 1; ?>">|<</button>
          <button name="pagina" value="<?= $pagina-1; ?>"><</button>

          <?php if($botao_inicio > 1): ?>
            <span>...</span>
          <?php endif; ?>
          <?php for($i = $botao_inicio; $i <= $botao_fim; $i++): ?>

            <?php if($i >= 1 && $i <= $total_paginas): ?>

              <button name="pagina" class="<?= ($pagina == $i) ? "active" : ""; ?>" value="<?= $i; ?>"><?= $i; ?></button>
            
            <?php endif; ?>

          <?php endfor; ?>

          <?php if($botao_fim < $total_paginas): ?>
            <span>...</span> 
          <?php endif; ?>   

          <button name="pagina" value="<?= $pagina+1; ?>">></button>
          <button name="pagina" value="<?= $total_paginas; ?>">>|</button>
                    
          <br><br>         

        </form>

      </div>
    </div>
          
  </div>
  
</body>
</html>