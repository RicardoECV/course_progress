<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center">
      <h1>Novo Destaque</h1>
    </div>

    <form class="row">   

      <div class="col-12 p-4 mx-auto text-center">

        <label for="titulo">Título: </label>
        <input type="text" name="titulo" autofocus required >
        <br><br>
        <label for="imagem">Imagem: </label>
        <input type="text" name="imagem" required>
        <br><br>

        <label for="texto">Texto: </label>
        <textarea name="texto" cols="100" rows="30" id="texto_menu_simples"></textarea>

        <script>
          tinymce.init({
            selector: '#texto_menu_simples'
          });
        </script>        
       
      </div>

      <div class="col-12 m-auto text-center">
        <button class="btn btn-success">Criar</button>
      </div>

    </form>

  </div>

</main>