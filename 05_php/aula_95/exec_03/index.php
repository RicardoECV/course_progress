<?php 

$form = isset($_GET["usuarios"]);

if($form) {
  $usuarios = $_GET["usuarios"];
}

?>
w  
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 95.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div>
    <h1>Vectores PHP</h1>
  </div>  

  <div class="caixa">

      <form action="">
        <input type="text" name="usuarios[nome]" placeholder="Nome do Usuario" required>
        <br><br>
        <input type="text" name="usuarios[morada]" placeholder="Morada do Usuario" required>
        <br><br>
        <input type="number" name="usuarios[altura]" placeholder="Altura do Usuario" required step="0.01" min="1">
        <br><br>
        <input type="submit" value="Clica!">
      </form>
      <br>
      <a href="index.php"><button>Reset</button></a>
      
    </div>
    <br>
    
    <?php if($form): ?>

      <div class="caixa">
        <h3>Nome: (<?= $usuarios["nome"]; ?>)</h3>
        <h3>Morada: (<?= $usuarios["morada"]; ?>) Anos</h3>
        <h3>Altura: (<?= number_format($usuarios["altura"], 2); ?>) m</h3>
      </div>
      <br>
      <div class="caixa">
        <pre><?php print_r($usuarios); ?></pre>
      </div>

    <?php endif; ?>
  
</body>
</html>