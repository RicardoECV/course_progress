<!DOCTYPE html>
<html lang="pt">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 144.4</title>
  
  <link rel="stylesheet" href="stylce.css">
  <script src="Pessoa.js" defer></script>
  <script src="main.js" defer></script>  

</head>
<body>

  <div>
    <h1>Javascript</h1>
  </div>

  <div class="box">

    <form action="" onsubmit="registarP(event)">

      <input type="text" placeholder="Nome" id="nome" autofocus required>
      <br><br>
      <input type="number" placeholder="Idade" id="idade" min="0" required>
      <br><br>
      <input type="number" placeholder="Altura" id="altura" min="0" step="0.01" required>
      <br><br>
      <select name="genero" id="genero">
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
      </select>
      <br><br>

      <button>Registar!</button>

    </form>    
    
  </div>    

  <div class="box" id="saida">
    <table></table>
  </div>
  
</body>
</html>