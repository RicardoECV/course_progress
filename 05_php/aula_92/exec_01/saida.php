<?php

$form = isset($_GET["numero"]);

if($form){
  $total = 0;  
  $numero = intval($_GET["numero"]);
  for ($i = 1 ; $i <= $numero ; $i += 1) {  
    if(!isset($_GET["idade$i"])){
      header("Location: index.php");
    }
    $total += intval($_GET["idade$i"]);
  }  
  $media = $total/$numero;
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

    <h1>Saida Alunos PHP</h1>
    <hr>
    
    <?php if($form): ?>
      
      <h2>Numero de alunos: (<?= $numero; ?>)</h2>      
      <h2>Idade media dos alunos: (<?= number_format($media,2); ?>)</h2>      
      <h2>Total das idades: (<?= $total; ?>)</h2>
    
      <table>

        <tr>
          <th>Número de aluno</th>
          <th>Idade do aluno</th>
        </tr>

        <?php for($i = 1 ; $i <= $numero ; $i++): ?>
          <tr>
            <th><?= $i; ?></th>
            <th><?= intval($_GET["idade$i"]) ?></th>
          </tr>
        <?php endfor; ?>        

      </table>

    <?php else: ?>
      <h2>Preencha o Formulário todo!</h2>

    <?php endif; ?> 
    
    <a href="index.php">
      <button>Home</button>
    </a>

  </div>
  
</body>
</html>