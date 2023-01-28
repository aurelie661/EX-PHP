<?php
//FONCTION CALCUL DE MOYENNE
function moyenne($nb1)
{
    $total = 0;
    for ($i = 0; $i < count($nb1); $i++) {
        $total = $total + $nb1[$i];
    }
    $total = $total / count($nb1);
    return $total;
}
$tab;
$nb1 = 0;
//CREER UN TABLEAU DE NOTE
for ($i = 0; $i < 9; $i++) {
    $tab[$i] = readline("Veuillez saisir la note n° " . ($i + 1) . " :");
}
foreach ($tab as $key => $value) {
    echo $value . " ";
}
//AFFICHE LA MOYENNE DES NOTES DU TABLEAU
echo "\n" . moyenne($tab);
