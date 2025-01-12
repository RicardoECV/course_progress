<?php     

$nome = "";
$idade = "";
$altura = "";
if (isset($_GET["nome"]) && isset($_GET["idade"]) && isset($_GET["morada"])) {
  $nome = $_GET["nome"];
  $idade = $_GET["idade"];
  $morada = $_GET["morada"];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 84.3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>PHP Input</h1>

    <form action="">

      <input type="text" name="nome" placeholder="Nome">
      <br><br>
      <input type="text" name="idade" placeholder="idade">
      <br><br>
      <input type="text" name="morada" placeholder="morada">
      <br><br>
      <input type="submit" value="enviar">

    </form>    

    <h3>
      Boa Noite (<?php echo $nome;?>) (<?php echo $idade; ?>) (<?php echo $morada; ?>)
    </h3>   
  
</body>
</html>