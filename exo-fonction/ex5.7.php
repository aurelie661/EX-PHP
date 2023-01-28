<?php
//SORTIR LE PLUS GRAND NOMBRE TAPER ET SA POSITION
for ($i = 1; $i <= 20; $i++) {
  $nombre = readline("Entrez le nombre numéro " . $i . " : ");
  if ($i == 1) {
    $max = $nombre;
    $position = $i;
  } elseif ($nombre > $max) {
    $max = $nombre;
    $position = $i;
  }
}
echo "Le plus grand de ces nombres est : " . $max . "\n";
echo "c'étais le nombre numéro : " . $position . "\n";
