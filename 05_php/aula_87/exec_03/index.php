<?php     

$euro = 0;
$opcao = "";
$form= isset($_GET["euro"]) && isset($_GET["opcao"]);
if($form) {
  $euro = floatval($_GET["euro"]); 
  $opcao = $_GET["opcao"];
  $dolar = $euro * 1.102;
  $libras = $euro * 0.84;
  $reais = $euro * 6.22;
  $iene = $euro * 156.77;
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

        <label for="opcao">CONVERTER PARA</label>
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
          (<?=$euro;?>€) =           
          <?php if($opcao == "Dolar") {echo "($ $dolar)";} ?>
          <?php if($opcao == "Libras") {echo "(£ $libras)";} ?>
          <?php if($opcao == "Reais") {echo "(R$ $reais)";} ?>
          <?php if($opcao == "Ienes") {echo "(¥ $iene)";} ?>
        </h2>
        <a href="index.php">
          <button>Reset!</button>
        </a>

      </div>

    <?php endif; ?>
   
 
</body>
</html>