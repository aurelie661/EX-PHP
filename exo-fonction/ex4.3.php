<?php

$heure = readline('Quelle heure est-il ?');
$minute = readline('Quelle sont les minutes actuelles ?');
$seconde = readline('Quelle sont les secondes actuelles ?');
//DONNERA LHEURE +1SECONDE
if ($seconde == 59 && $minute == 59 && $heure == 23) {
  $heure = 0;
  $minute = 0;
  $seconde = 0;
} elseif ($seconde == 59 && $minute == 59) {
  $heure += 1;
  $minute = 0;
  $seconde = 0;
} else {
  $seconde += 1;
}
echo ('Dans une seconde il sera ' . $heure . ':' . $minute . ':' . $seconde . ' secondes');
