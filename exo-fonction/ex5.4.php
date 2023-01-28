<?php
//FONCTION DE MULTIPLICATION
function multiplier($nb1, $nb2)
{
  $total = $nb1 * $nb2;
  return $total;
}

$nombre = readline("Veuillez entrer un nombre :");
//AFFICHE LA TABLE DE MULTIPLICATION DU NOMBRE TAPER
echo "Table de " . $nombre . ":\n";
for ($i = 1; $i <= 10; $i++) {
  echo "$nombre x $i = " . multiplier($nombre, $i) . "\n";
}
