<?php

  require_once("globais.php");  

?>

<main>

  <h2>Pessoas</h2>  
  
  <div class="caixa">
    <table>

      <tr>
        <th>Posição</th>
        <th>Nome</th>
        <th>Morada</th>
        <th>Idade</th>
        <th>Altura</th>
        <th>Género</th>
      </tr>

      <?php foreach ($pessoas as $i => $p) {
        $p->toTablet($i);}         
      ?>    

    </table>
  </div>

  <div class="caixa">
    <pre>
      <?php print_r($pessoas); ?>
    </pre> 
  </div>

</main>