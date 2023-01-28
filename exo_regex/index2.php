<?php
$testTel = readline("Veuillez saisir un numéro de téléphone : ");
 
if (preg_match("#^0[1-9]{1}([-_.\s]?[0-9]{2}){4}$#", $testTel)){
    echo "Numéro de télépohne valide";
} else {
    echo "Numéro de téléphone invalide \n";
}