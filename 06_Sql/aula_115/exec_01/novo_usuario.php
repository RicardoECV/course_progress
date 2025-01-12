<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 115.1</title>

  <!-- Bootsrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Local CSS -->
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

  <div class="row m-5 p-4 border border-5 border-primary rounded-5">

    <div class="col-12">

      <h2>
        Novo Usuário
      </h2>
      <br>

    </div>

    <div class="col-12">

      <form action="nova_validacao.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br><br>
        <label for="apelido">Apelido:</label>
        <input type="text" name="apelido" required>
        <br><br>
        <label for="nif">Nif:</label>
        <input type="text" name="nif" required>
        <br><br>
        <label for="login">Login:</label>
        <input type="text" name="login" required>
        <br><br>
        <label for="pw">Password:</label>
        <input type="password" name="pw" required>
        <br><br>
        <input type="submit" value="Criar">

      </form>

    </div>
  </div>
  
</body>
</html>