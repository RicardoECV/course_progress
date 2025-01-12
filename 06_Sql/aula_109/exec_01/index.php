<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 109.1</title>

  <!-- Bootsrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Local CSS -->
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <h1>Exec SQL</h1>
      </div>
    </div>    

    <div class="row my-5 w-50 mx-auto border border-5 rounded-5 p-3 border-info">

      <div class="col-12 mb-3">
        <h2>Produtos</h2>
      </div>

      <div class="col-12">

        <form action="saida.php">

          <input type="nummber" placeholder="Insira o limite inferior." name="limite_inf" required min="0" step="0.01">

          <input type="nummber" placeholder="Insira o limite superior." name="limite_sup" required min="0" step="0.01">
          <br><br>

          <h4>Ordem:</h4>          
          <input type="radio" id="count-asc" name="contagem" value="ASC" required>
          <label for="count-asc">Ascendente</label>
          <br>          
          <input type="radio" id="count-desc" name="contagem" value="DESC">
          <label for="count-desc">Descendente</label>
          <br><br>
          <input type="submit">

        </form>

      </div>
     
    </div>  
      
  </div>
  
</body>
</html>