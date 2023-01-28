<?php
//FONCTION DE LA FACTORIELLE
function factorielle($nb2)
{
  $total = 1;
  for ($nb1 = 1; $nb1 <= $nb2; $nb1++) {
    $total = $total * $nb1;
  }
  return $total;
}
$nombre = readline("Veuillez entrer un nombre : ");
//AFFICHE LA FACTORIELLE DU NOMBRE TAPER
echo factorielle($nombre);
