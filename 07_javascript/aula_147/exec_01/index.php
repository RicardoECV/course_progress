<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exec 147.1</title>

  <link rel="stylesheet" href="style.css">
  <script src="Produto.js" defer></script>
  <script src="main.js" defer></script>
</head>
<body>

  <header>
    <h1>Supermercado Super</h1>
  </header>

  <main>
    <div class="botoes">
      <button onclick="destacar('.padaria')">Padaria</button>
      <button onclick="destacar('.chocolates')">Chocolates</button>
      <button onclick="destacar('.peixes')">Peixes</button>
      <button onclick="destacar('.queijos')">Queijos</button>
    </div>    
    
    <div class="produtos">

      <div class="padaria">
        <img src="imagens/pao.jpg" alt="">
        <div>
          <h3>Pão Bola de Lenha</h3>
          <h3>€ 0.49 uni.</h3>
        </div>       
      </div>

      <div class="padaria">
        <img src="imagens/pao_rio_maior.jpg" alt="">
        <div>
          <h3>Pão de Rio Maior</h3>
          <h3>€ 1.19 uni.</h3>
        </div>        
      </div>

      <div class="padaria">
        <img src="imagens/pao_massa_mae.jpg" alt="">
        <div>
          <h3>Pão Milho Girassol</h3>
          <h3>€ 2.39 uni.</h3>
        </div>        
      </div>

      <div class="chocolates">
        <img src="imagens/chocolate_nestle.jpg" alt="">
        <div>
          <h3>Chocolate de Leite Extrafino</h3>
          <h3>€ 3.16 uni.</h3>
        </div>       
      </div>

      <div class="chocolates">
        <img src="imagens/chocolate_milka.jpg" alt="">
        <div>
          <h3>Chocolate Milka</h3>
          <h3>€ 4.39 uni.</h3>
        </div>        
      </div>

      <div class="chocolates">
        <img src="imagens/mems.jpg" alt="">
        <div>
          <h3>M & M</h3>
          <h3>€ 6.65 uni.</h3>
        </div>       
      </div>

      <div class="peixes">
        <img src="imagens/dourada.jpg" alt="">
        <div>
          <h3>Dourada Média Fresca</h3>
          <h3>€ 6.49 kg.</h3>
        </div>        
      </div>

      <div class="peixes"> 
        <img src="imagens/peixe_vermelho.jpg" alt="">
        <div>
           <h3>Cantaril da Costa Fresco</h3>
          <h3>€ 10.99 kg.</h3>
        </div>       
      </div>

      <div class="queijos">
        <img src="imagens/queijo.jpg" alt="">
        <div>
          <h3>Queijo Flamengo</h3>
          <h3>€ 4.39 uni.</h3>
        </div>        
      </div>

    </div>
  </main>
  
</body>
</html>