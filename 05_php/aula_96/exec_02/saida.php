<?php

require_once("funcoes.php");

$usuarios[] = novaPessoa("Ricardo Manuel", "Porto", 1.23, "Masculino");
$usuarios[] = novaPessoa("Ana Vicente", "Lisboa", 1.70, "Feminino");
$usuarios[] = novaPessoa("José Carvalho", "Faro", 1.79, "Masculino");

if(isset($_GET["usuarios"])) {  
  $usuarios[] = $_GET["usuarios"];
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
  <title>Exec 96.2</title>
  <link rel="stylesheet" href="style.css">  
</head>
<body>

  <div>

    <h1>Calculo Idades PHP</h1>       
    
    <div class="caixa">
      <table>

        <tr>
          <th>Número</th>
          <th>Nome</th>
          <th>Morada</th>
          <th>Altura</th>
          <th>Gênero</th>
        </tr>
        
        <?php foreach($usuarios as $i => $p): ?>
          <tr>
            <td><?php echo $i + 1; ?></td>
            <td><?php echo $p["nome"]; ?></td>
            <td><?php echo $p["morada"]; ?></td>
            <td><?php echo number_format($p["altura"], 2); ?>m</td>
            <td><?php echo $p["genero"]; ?></td>          
          </tr>
        <?php endforeach; ?>

      </table>
    </div>
    <br>

    <div class="caixa">
      <pre><?php print_r($usuarios); ?></pre>
    </div>     

  </div>
  <br>
  <a href="index.php"><button>Reset</button></a> 
  
</body>
</html>