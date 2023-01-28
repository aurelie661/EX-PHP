<?php
$nB = (int)readline("veuillez entrer un nombre :");
//INDIQUE SI NOMBRE EST POSITIF OU N2GATIF EN GERANT LES VALEURS NUL
if ($nB == 0) {
    echo ('Valeur null');
} elseif ($nB < 0) {
    echo ('Valeur négatif');
} else {
    echo ('Valeur positif');
}
