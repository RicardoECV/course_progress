<main>

  <h1>Bem Vindo</h1>
  <?php

  require_once("classes/Pessoa.php");

  $pessoas = [
    new Pessoa("Ricardo", "Lisboa", 25),
    new Pessoa("Antonio", "Corroios", 34),
    new Pessoa("Ana", "Porto", 37),
    new Pessoa("Filipa", "Faro", 26)
  ];

  echo "<hr>";  
  print_r($pessoas);
  echo "<br>";
  echo "<br>";
  echo $pessoas[1]->nome . "<br>";
  echo $pessoas[1]->morada . "<br>";
  echo $pessoas[1]->idade . "<br>";
  echo "<hr>";

  foreach ($pessoas as $p) {
    echo $p->nome . " - " . $p->morada . " - " . $p->idade . "<br>";
  }

  echo "<hr>"; 

  foreach ($pessoas as $p) {$p->toString();}

  echo "<hr>";  

  $pessoas[0]->fazerAnos();
  $pessoas[0]->toString();

  echo "<hr>";
  echo "<br>";

  ?>

</main>