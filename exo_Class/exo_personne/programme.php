<?php
include_once('Personne.php');
$p1 = new Personne('Potter','Harry','1569');
$p2 = new Personne('Dupond','Patrick','1625');
$p3 = new Personne('Six','Frederic','1984');

$p1->setAnnee('2020');

echo "Je m'appelle ".$p1->getNom()." ".$p1->getPrenom()." née en : ".$p1->getAnnee(); 


