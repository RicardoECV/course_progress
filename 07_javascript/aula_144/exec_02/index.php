<!DOCTYPE html>
<html lang="pt">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 144.2</title>
  
  <link rel="stylesheet" href="stylce.css">
  <script src="main.js" defer></script>

</head>
<body>

  <div>
    <h1>Javascript</h1>
  </div>

  <div class="box">
    <h2>Nova Cor!</h2>

    <form action="" onsubmit="saveItems(event)">

      <input type="text" name="nome" placeholder="Nome" id="nome" required>
      <br><br> 
      <input type="text" name="cor" placeholder="Cor" id="cor" required>
      <br><br>    
      <button>Gogo!</button> 
      <button type="button" class="reset" onclick="resetTudo()">Reset Tudo!</button>  

    </form>
  </div>  

  <div class="box d-none" id="saida"></div>
  
</body>
</html>