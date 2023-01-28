<?php
// function multi($a,$z){
//   $total=$nbDeCopie*$tarif;
//   return $total;
// }
$nbDeCopie = readline('Combien de photocopie voulez vous effectuer :');
//CALCUL LE PRIX DE X PHOTOCOPIE(s)
if ($nbDeCopie <= 10) {
  $tarif = $nbDeCopie * 0.10;
}
if ($nbDeCopie > 10 && $nbDeCopie <= 30) {
  $tarif = 1 + ($nbDeCopie - 10) * 0.09;
} else {
  $tarif = 2.80 + ($nbDeCopie - 30) * 0.08;
}
echo (' Tarif : ' . $tarif . ' €');
