<?php
$somme = 0;
$tailleTab = readline("Entrer la taille du tableau : ");
for ($i = 0; $i < $tailleTab; $i++) {
    $tab1[$i] = readline("Entrer vos notes : ");
}
echo "\nListe des notes du tableau : ";
//CALCUL LA SOMME DES NOTES
for ($i = 0; $i < $tailleTab; $i++) {
    echo $tab1[$i] . " ";
    $somme = $somme + $tab1[$i];
}
//CALCUL DE LA MOYENNE
echo "\nMoyenne de la classe : " . $moyenne = $somme / $tailleTab;
echo "\nNotes supérieur à la moyenne : ";
//RECHERCHE DUNE NOTE SUP2RIEUR A LA MOYENNE
for ($i = 0; $i < $tailleTab; $i++) {
    if ($tab1[$i] > $moyenne) {
        echo $tab1[$i] . " ";
    }
}
