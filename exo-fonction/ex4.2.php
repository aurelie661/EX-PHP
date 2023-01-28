<?php

$heure = readline('Quelle heure est-il ?');
$minute = readline('Quelle sont les minutes actuelles ?');
//DONNERA LHEURE +1MINUTE
if ($minute == 59) {
  $heure += 1;
  $minute = 0;
} else {
  $minute += 1;
}
echo ('Dans une minute il sera ' . $heure . ' et ' . $minute);
