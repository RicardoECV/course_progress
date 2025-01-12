<main class="container-fluid">

  <?php if(empty($menu_simples)): ?>

    <div class="row">
      <div class="col-12">
        <h2 class="text-danger text-center p-4">Menu Não Encontrado!</h2>
      </div>
    </div>

  <?php else: ?>

  <div class="row">
    <div class="col-12 text-center p-3">
      <h1>Edição</h1>
      <h3>(<?= $menu_simples["titulo"]; ?>)</h3>
    </div>
  </div>

  <form class="row">
    <input type="hidden" name="pagina" value="<?= $pagina; ?>">
    <div class="col-12 p-4 mx-auto text-center">
      
      <textarea name="texto" cols="100" rows="30" id="texto_menu_simples"><?= $menu_simples["texto"]; ?></textarea>
      <script>
      tinymce.init({
        selector: '#texto_menu_simples'
      });

    </script>

    </div>

    <div class="col-12 m-auto text-center">
      <button class="btn btn-success">Editar</button>
    </div>
  </form>

  <?php endif; ?>
</main>