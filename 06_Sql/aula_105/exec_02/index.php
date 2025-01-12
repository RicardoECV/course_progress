<?php

require_once("data_base.php");

$colaboradores = selectSQL("SELECT * FROM colaboradores");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 105.2</title>
 
  <!-- Local CSS -->
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

  <div>

    <h1>Colaboradores</h1>

    <div class="caixa">

      <table>

        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>NIF</th>
          <th>Login</th>
          <th>Senha</th>
        </tr>

        <?php foreach ($colaboradores as $c): ?>
          <tr>
            <td><?= $c["id"]; ?></td>
            <td><?= $c["nome"]; ?></td>
            <td><?= $c["nif"]; ?></td>
            <td><?= $c["login"]; ?></td>
            <td><?= $c["pw"]; ?></td>   
          </tr>
        <?php endforeach; ?>    

      </table>

    </div>

  </div>
  
</body>
</html>