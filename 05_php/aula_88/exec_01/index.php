<?php     

$opcao = "";
$form = isset($_GET["euro"]) && isset($_GET["opcao"]);
if($form) {
  $euro = floatval($_GET["euro"]); 
  $opcao = $_GET["opcao"];

  if($opcao == "Dolar") {
    $resultado = "($" .number_format($euro * 1.102, 2).")";
  }
  elseif ($opcao == "Libras") {
    $resultado = "(£" .number_format($euro * 0.84, 2).")";
  }
  elseif ($opcao == "Reais") {
    $resultado = "(R$" .number_format($euro * 6.22, 2).")";
  }
  elseif ($opcao == "Ienes") {
    $resultado = "(¥" .number_format($euro * 156.77, 2).")";
  }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 87.3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>CONVERSOR MONETÁRIO</h1>
    
    <div class="caixa">
      <form action="">

        <h3>VALOR EM EUROS</h3>
        <!-- INPUT EURO -->
        <input class="input_euro" type="number" name="euro" required min="0" step="0.001" autofocus value="<?= ($form) ? $euro : ""; ?>">
        <br><br>

        <div>CONVERTER PARA</div>
        <br><br>

        <!-- INPUTS MOEDAS -->
        <div class="checkbox">

          <div>
            <label for="dolar">DÓLAR</label>
            <br>
            <input type="radio" name="opcao" required value="Dolar" id="dolar" <?= ($opcao == "Dolar") ? "checked" : ""; ?>>     
          </div>
          
          <div>
            <label for="libras">LIBRAS</label>
            <br>
            <input type="radio" name="opcao" required value="Libras" id="libras" <?= ($opcao == "Libras") ? "checked" : ""; ?>>   
          </div>           
          
          <div> 
            <label for="reais">REAIS</label>
            <br>
            <input type="radio" name="opcao" required value="Reais" id="reais" <?= ($opcao == "Reais") ? "checked" : ""; ?>>
          </div>         
          
          <div>
            <label for="ienes">IENES</label>
            <br>
            <input type="radio" name="opcao" required value="Ienes" id="ienes" <?= ($opcao == "Ienes") ? "checked" : ""; ?>>
          </div>     

        </div>        
              
        <br><br>
        <input type="submit" value="CALCULAR!">
         
      </form>
      <br>

    </div>

    <!-- CAIXA DO RESULTADO DA CONVERÇÂO -->
    <?php if($form): ?>

      <div class="caixa">

        <h2>
          (<?=$euro;?>€) = <?=$resultado;?> 
        </h2>
        <a href="index.php">
          <button>Reset!</button>
        </a>

      </div>

    <?php endif; ?>
   
 
</body>
</html>