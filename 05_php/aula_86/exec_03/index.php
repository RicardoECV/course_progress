<?php     

$peso = 0;
$preco = 0;
$total = 0;

$form= isset($_GET["peso"]) && isset($_GET["preco"]);
if($form) {
  $peso = floatval($_GET["peso"]);
  $preco = floatval($_GET["preco"]);
  $total = $preco * $peso;
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 86.3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>TALHO</h1>
    
    <div class="caixa">
      <p class="peso"><?=number_format($peso, 3);?></p>
      <p class="preco"><?=number_format($preco, 2);?></p>
      <p class="total"><?=number_format($total, 2);?></p>
    </div>

    <div class="input_1">
    
      <form action=""> 
        <?php if($form): ?>                 
          <input type="number" name="peso" placeholder="PRECO" step="0.001" min="0" value=<?=$peso;?> required>        
          <input type="number" name="preco" placeholder="PRECO/KG" step="0.01" min="0" value=<?=$preco;?> required>

        <?php else: ?>          
            <input type="number" name="peso" placeholder="PRECO" step="0.001" min="0">        
            <input type="number" name="preco" placeholder="PRECO/KG" step="0.01" min="0">                     
          
        <?php endif; ?>         
        <input type="submit" value="Calcular">
      </form> 

      <br>
      <a href="index.php">
        <button>Reset!</button>
      </a>
      
    </div>      
   

</body>
</html>