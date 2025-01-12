<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 111.1</title>

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

    <div class="row m-5 p-4 border border-5 border-primary rounded-5">

      <div class="col-12">
        <h2>Insira um produto:</h2>
      </div>

      <div class="col-12">
        <form action="saida.php">
          <input type="text" name="nome" placeholder="Nome" required>
          <br><br>
          <input type="number" name="preco" placeholder="Preço" min="0" step="0.01" required>
          <input type="number" name="quantidade" placeholder="Quantidade" min="0" required>
          <br><br>
          <input type="submit">
        </form> 
      </div>     
    
    </div>   

  </div>
  
</body>
</html>