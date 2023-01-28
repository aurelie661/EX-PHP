<?php


//REMPLIE ET AFFICHE UN TABLEAU DE NOTE
$tab;
for ($i = 0; $i < 9; $i++) {
   $tab[$i] = readline("Veuillez saisir la note n° " . ($i + 1) . " :");
}
foreach ($tab as $key => $value) {
   echo $value;
}
