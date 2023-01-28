<?php

$nom=readline("Nom :");
$prenom=readline("Prénom :");
$numTel=readline("Numéro de téléphone :");

$myFile=fopen("C://Users/Liyah/Documents/php/client3.txt", "w+");
$wR=fwrite($myFile,"Nom : ".$nom.", Prénom : ".$prenom.", Numéro de téléphone : ".$numTel);

fclose($myFile);
