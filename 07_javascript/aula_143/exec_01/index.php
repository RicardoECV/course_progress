<!DOCTYPE html>
<html lang="pt">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 143.1</title>
  
  <link rel="stylesheet" href="stylce.css">
  <script src="main.js" defer></script>

</head>
<body>

  <div>
    <h1>Javascript</h1>
  </div>


  <div class="box">
    <h2>Novo Registo</h2>

    <form action="" onsubmit="registar(event)">
      <input type="text" name="nome" placeholder="Nome" id="nome" required>
      <br><br>
      <input type="text" name="morada" placeholder="Morada" id="morada" required>
      <br><br>
      <input type="number" name="nif" placeholder="Nif" id="nif" required>
      <br><br>
      <button>Registar</button>      
    </form>
  </div>

  <div class="box">
    <h2>Lista</h2>

    <table>
      <tr>
        <th>Nome</th>
        <th>Morada</th>
        <th>Nif</th>
      </tr>      
    </table>
  </div>

   
  
</body>
</html>