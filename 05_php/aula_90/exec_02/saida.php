<?php

$form = isset($_GET["numero_1"]) && isset($_GET["numero_2"]) && isset($_GET["nome"]) && isset($_GET["sobre"]);

if($form) {
  $numero_1 = intval($_GET["numero_1"]);
  $numero_2 = intval($_GET["numero_2"]);
  $nome = $_GET["nome"];  
  $sobre = $_GET["sobre"]; 
  $foto = $_GET["url"];
}

else {
  header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 90.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div>
    
    <hr>
      <h3>Perfis PHP</h3>
      <a href="index.php">
        <button>Home</button>
      </a>
    <br>
    <hr> 

    <div>       
      <?php for($i = 1; $i <= $numero_1; $i += 1): ?>
        
        <div class="card">

          <img src="perfil.jpg" alt="Perfil">           
          <div>
            <h4>Perfil Anterior <?= $i; ?></h4>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, repudiandae animi odit quo quisquam labore minus tempora quasi? Quo, laborum quos! Rerum dicta eos ipsum?
            </p> 
          </div>  

        </div>

      <?php endfor; ?>
    </div>

    <div>
      <div class="card perfil">           
        
        <img src="<?=(!$foto == "") ? $foto : "perfil.jpg" ?>" alt="">
        <div>           
          <h4><?=$nome;?></h4>
          <p>
            <?=$sobre;?>
          </p> 
        </div>  

      </div>
    </div>

    <div>       
      <?php for($i = 1; $i <= $numero_2; $i += 1): ?>
        
        <div class="card">
          
          <img src="perfil.jpg" alt="Perfil">
          <div>
            <h4>Perfil Posterior <?= $i; ?></h4>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, repudiandae animi odit quo quisquam labore minus tempora quasi? Quo, laborum quos! Rerum dicta eos ipsum?
            </p> 
          </div>  

        </div>

      <?php endfor; ?>
    </div>

   
  </div>
  
</body>
</html>