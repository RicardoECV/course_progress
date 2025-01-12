<?php

$form = isset($_GET["numero"]) && isset($_GET["valor_1"]) && isset($_GET["data_1"]);

if($form){
  $total = 0;  
  $numero = intval($_GET["numero"]);

  for ($i = 1 ; $i <= $numero ; $i += 1) {  
    if(!isset($_GET["valor_$i"]) && isset($_GET["data_$i"])){
      header("Location: index.php");
      exit();
    }
    $total += floatval($_GET["valor_$i"]);
  }  

  $retido = $total / 1.23;
  $iva = $total - $retido;
}

else {
  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 92.1</title>
  <link rel="stylesheet" href="style.css">  
</head>
<body>

  <div>

    <h1>Saida Recibos PHP</h1>
    <hr>
    
    <?php if($form): ?>
      
      <h2>Numero de recibos: (<?= $numero; ?>)</h2>  
    
      <table>

        <tr>
          <th>Número do recibo</th>
          <th>Valor</th>
          <th>Data</th>
        </tr>

        <?php for($i = 1 ; $i <= $numero ; $i++): ?>
          <?php $date=date_create($_GET["data_$i"]) ?>
          <tr>
            <th><?= $i; ?></th>
            <th><?= number_format(floatval($_GET["valor_$i"]),2); ?> €</th>
            <th><?= date_format($date, "d/m/Y"); ?></th>
          </tr>
        <?php endfor; ?>        

      </table>

    <?php else: ?>
      <h2>Preencha o Formulário todo!</h2>

    <?php endif; ?> 

    <h3>Valor Retido: <?= number_format($retido, 2) ?> €</h3>    
    <h3>Valor IVA: <?= number_format($iva, 2) ?> €</h3>
    <h3>Valor Total: <?= number_format($total, 2) ?> €</h3>
    
    <a href="index.php">
      <button>Home</button>
    </a>

  </div>
  
</body>
</html>