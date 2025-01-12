<?php
$opcao = "";
$form = isset($_GET["opcao"]);
if ($form) {
  $opcao = $_GET["opcao"];
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exericio 86.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Calculo da circunferencia</h1>

  <div class="caixa">

    Você escolheu ( <?= ($form) ? $opcao: "?"; ?> )

  </div>

  <div class="caixa">
    <form action="">

      <label for="opcao">Item Extra</label>
      <br><br>

      <label for="queijo">Queijo</label>
      <input type="radio" name="opcao" required value="Queijo" id="queijo" <?= ($opcao == "Queijo") ? "checked" : ""; ?>>

      <br>
      <label for="bacon">Bacon</label>
      <input type="radio" name="opcao" required value="Bacon" id="bacon" <?= ($opcao == "Bacon") ? "checked" : ""; ?>>

      <br>
      <label for="cogumelos">Cogumelos</label>
      <input type="radio" name="opcao" required value="Cogumelos" id="cogumelos" <?= ($opcao == "Cogumelos") ? "checked" : ""; ?>>

      <br><br>
      <input type="submit" value="Enviar">

    </form>


  </div>
  
     
</body>
</html>