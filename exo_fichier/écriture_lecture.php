<?php

$myFile=fopen("C://Users/Liyah/Documents/php/client2.txt", "r+");
for($i=0;$i<8;$i++){
    $nom=readline("Nom :");
    $prenom=readline("Prénom :");
    $mail=readline("Mail :");
    $numTel=readline("Numéro de téléphone :");
    $wR=fwrite($myFile,"Nom: ".$nom.", Prénom: ".$prenom.", Mail: ".$mail.", N°: ".$numTel."\n");
}
fclose($myFile);
$myFile=fopen("C://Users/Liyah/Documents/php/client2.txt", "r");
$content=fread($myFile, filesize("C://Users/Liyah/Documents/php/client2.txt"));
echo $content;
fclose($myFile);
