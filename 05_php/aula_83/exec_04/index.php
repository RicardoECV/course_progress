<?php

echo "<body style= 'background-color: rgba(0,0,0,0.5)';>";
date_default_timezone_set("Europe/Lisbon");

$idade = 23;
$temp = 15.3;

if ($idade >= 18) {
  echo "Maior";
}

else {
  echo "Menor";
}
echo "<br>";

if ($temp <= 15) {echo "Frio";}
elseif ($temp < 25) {echo "Amena";}
else {echo "Calor";}

?>