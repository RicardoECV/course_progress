<?php

function loopWhile ($numero){
  $loop = 0;
  while($loop <= $numero) {
    echo "$loop ";
    $loop +=1;
  }
}

function loopFor ($numero) {
  for ($i = 0; $i <= $numero; $i += 1) {
    echo "$i ";
  }
}

?>