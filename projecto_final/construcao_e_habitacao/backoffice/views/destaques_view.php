<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Destaques (Edição)</h1>      
    </div>

    <div class="col-12 text-center p-4">
      <button class="btn btn-primary">
        <a class="text-decoration-none text-white" href="destaque_novo.php">Novo Destaque</a>
      </button>      
    </div>

    <div class="col-12">
      <table>

        <tr class="text-center">     

          <th>Imagem</th>
          <th>Título</th>
          <th>Texto</th>
          <th>Está na Home?</th>  
          <th>Ações</th>  

        </tr>

        <?php foreach($destaques as $d): ?>
          <tr>

            <td><img src="<?= $d["imagem"]; ?>" alt="<?= $d["imagem"]; ?>"></td>
            <td><?= $d["titulo"]; ?></td>
            <td><?= substr(strip_tags($d["texto"]),0 , 500); ?>...</td>
            <td class="text-center"><?= ($d["home_page"]) ? "Sim" : "Não"; ?></td>
            <td>
              <a href="destaque_editar.php?id=<?= $d["id"]; ?>">Editar</a>   
              <br><br>           
              <a href="destaque_apagar.php?id=<?= $d["id"]; ?>">Apagar</a>
            </td>
            
          </tr>
        <?php endforeach; ?>

      </table>
    </div>
  </div>

</main>