<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 91.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div>

    <h1>Inicial Pet PHP</h1>
    
    <form action="meio.php">
      <input type="text" placeholder="Insira o nome do dono" required name="nome" autofocus>
      <br><br>
      <input type="text" placeholder="Insira o seu nif" required name="nif" autofocus>
      <br><br>
      <input type="number" placeholder="Insira a sua morada" required name="morada" min="0" autofocus>
      <br><br>
      <input type="submit">
    </form>
    <br>
    
    <a href="index.php">
      <button>Reset</button>
    </a>

  </div>  
  
</body>
</html>