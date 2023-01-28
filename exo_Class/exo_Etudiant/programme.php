<?php

include_once("Personne.php");
include_once("Etudiant.php");
include_once("Professeur.php");
include_once("Employe.php");

$etudiant1= new Etudiant('Dufour','Pierre','123456789');
$prof= new Professeur('Dupond','Albert',1245.65,'PHP');

echo $etudiant1;
echo $prof;