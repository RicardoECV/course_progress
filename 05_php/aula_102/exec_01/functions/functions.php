<?php 

function titulo_nav ($pagina_actual) {  
  if ($pagina_actual == "viagem") {return "Viagem";}
  elseif ($pagina_actual == "contactos") {return "Contactos";}
  else {return "Viagens";}
}

?>