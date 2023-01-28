<?php
$phrase = readline("Veuillez saisir votre phrase :");

$alphabet="abcdefghijklmnopqrstuvwxyz";
    for ($i=0; $i < count($alphabet); $i++) { 
        if($char == $alphabet($i)){
            return $i;
        }
    }
    return -1;


