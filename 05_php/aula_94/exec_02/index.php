<?php

$form_1 = isset($_GET["numero"]);
$form_2 = isset($_GET["alunos"]);

if($form_1) {$numero = $_GET["numero"];}
if($form_2) {$turma = $_GET["alunos"];}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 94.2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div>
    <h1>Vectores PHP</h1>

    <div class="caixa">

      <form action="">
        <input type="number" name="numero" required>
        <br><br>
        <input type="submit" value="Clica!">
      </form>
      <a href="index.php"><button>Reset</button></a>
      
    </div>
    <br>

    <?php if($form_1): ?>
      
      <div class="caixa">
        <form action="">

          <?php for ($i = 0; $i < $numero; $i ++): ?>
            <input type="text" name="alunos[]" placeholder="aluno <?= $i + 1 ?>" required>
            <br><br>
          <?php endfor; ?>          
          <input type="submit" value="Clica!">
          <br>

        </form> 
      </div>

    <?php endif; ?>
  </div>   

  <?php if($form_2): ?>

    <div class="caixa">

      <?php for ($i = 0; $i < count($turma); $i ++): ?>
        <p><?= $i + 1; ?> - <?= $turma[$i]; ?></p>
      <?php endfor; ?>

      <br><hr><br>

      <h3>
        <pre> <?php print_r($turma); ?> </pre>
      </h3>

    </div>

  <?php endif; ?>
  
</body>
</html>