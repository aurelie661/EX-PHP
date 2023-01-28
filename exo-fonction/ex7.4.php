<?php
$tailleTab = readline("Entrer la taille des tableaux : ");
for ($i = 0; $i < $tailleTab; $i++) {
    $tab1[$i] = rand(0, 100);
    $tab2[$i] = rand(0, 100);
}

echo "\nValeurs du tableau 1 : ";
for ($i = 0; $i < count($tab1); $i++) {
    echo $tab1[$i] . " ";
}
echo "\nValeurs du tableau 2 : ";
for ($i = 0; $i < count($tab2); $i++) {
    echo $tab2[$i] . " ";
}
echo "\n\n";
$indicSuppr = readline("Entrer le numéro de l'élément à supprimer : ");

// Supprime l'élément à l'indice saisi
unset($tab1[$indicSuppr]);

echo "\nValeurs du tableau 1 après suppression : ";
foreach ($tab1 as $key => $value) {
    echo $value . " ";
}

// Décale les valeurs à partir de l'indice saisi
for ($i = $indicSuppr; $i < count($tab2) - 1; $i++) {
    $tab2[$i] = $tab2[$i + 1];
}
// Supprime le dernier élément
unset($tab2[count($tab2) - 1]);

echo "\nValeurs du tableau 2 après suppression : ";
for ($i = 0; $i < count($tab2); $i++) {
    echo $tab2[$i] . " ";
}
