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

    <h1>Perfil PHP</h1>

    <form action="saida.php">
      <input type="text" placeholder="Insira o nome do perfil" required name="nome" autofocus>
      <br><br>
      <textarea class="campo_sobre" type="text" name="sobre" placeholder="Sobre..." required></textarea>
      <br><br>
      <input type="number" placeholder="Perfis anterioes" name="numero_1" required min="0">
      <br><br>
      <input type="number" placeholder="Perfis posteriores" name="numero_2" required min="0">
      <br><br>
      <input type="text" placeholder="Link Foto" name="url">
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