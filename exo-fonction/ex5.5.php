<?php
//FONCTION CALCUL DE LA SOMME FACTORIELLE
function sommeFactorielle($nb2)
{
  $total = 0;
  for ($nb1 = 0; $nb1 <= $nb2; $nb1++) {
    $total = $total + $nb1;
  }
  return $total;
}
$nombre = readline("Veuillez entrer un nombre : ");
//AFFICHE LA SOMME FACTORIELLE DU NOMBRE TAPER
echo sommeFactorielle($nombre);
