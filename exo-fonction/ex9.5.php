<?php
$phrase = readline("Veuillez saisir votre phrase :");
$rang = readline("Veuillez indiquer le rang du caractère à supprimer :");

for ($i = $rang; $i < strlen($phrase) - 1; $i++) {
    $phrase[$i] = $phrase[$i + 1];
}
$phrase = substr($phrase, 0, -1);
echo "Votre nouvelle phrase : " . $phrase;
