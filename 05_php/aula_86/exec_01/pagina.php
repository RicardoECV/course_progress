<?php

$form = isset($_GET["nome"]);
if ($form){
  $nome = $_GET["nome"];  
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>86.1</title>
</head>
<body>

  <h1>PHP Saida</h1>

  <div class="caixa">

    <?php if($form): ?>

      <h3>Boa noite <?=$nome?></h3>

    <?php else: ?>

      <h3>Preencha o formulario anterior</h3>

    <?php endif; ?>


  </div>

  
</body>
</html>