<?php
$phrase = readline("Veuillez saisir votre phrase :");
$voy = 0;
for ($i = 0; $i < strlen($phrase); $i++) {
    if ($phrase[$i] == "a" || $phrase[$i] == "e" || $phrase[$i] == "i" || $phrase[$i] == "o" || $phrase[$i] == "u" || $phrase[$i] == "y") {
        $voy += 1;
    }
}
echo "il y as " . $voy . " voyelle(s) dans cette phrase.";
