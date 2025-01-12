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
    <h1>Vectores com Chaves PHP</h1>
  </div>  

  <div class="caixa">

      <form action="saida.php">

        <input type="text" name="usuarios[nome]" placeholder="Nome do Usuario" required>
        <br><br>
        <input type="text" name="usuarios[morada]" placeholder="Morada do Usuario" required>
        <br><br>
        <input type="number" name="usuarios[altura]" placeholder="Altura do Usuario" required step="0.01" min="1">
        <br><br>

        <label for="genero">Gênero</label>
        <select name="usuarios[genero]" id="genero" required>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>

        <br><br>
        <input type="submit" value="Clica!">

      </form>
      <br>
      <a href="index.php"><button>Reset</button></a>
      
    </div>  

</body>
</html>