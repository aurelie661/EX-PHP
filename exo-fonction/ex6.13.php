<?php
$tailleTab = readline("Entrer la taille du tableau : ");

for ($i = 0; $i < $tailleTab; $i++) {
    $tab1[$i] = readline("Entrer votre valeur : ");
}
echo "\nListe des valeurs du tableau : ";
for ($i = 0; $i < $tailleTab; $i++) {
    echo $tab1[$i] . " ";
}
$max = $tab1[0];
$position = 0;
//AFFICHE LA VALEUR MAX DU TABLEAU AVEC SA POSITION
for ($i = 0; $i < $tailleTab; $i++) {
    if ($tab1[$i] > $max) {
        $max = $tab1[$i];
        $position = $i;
    }
}
echo "\nLa plus grande valeur est : " . $max;
echo "\nSa position dans le tableau est : " . $position;
