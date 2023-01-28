<?php
include_once("Developpeur.php");
include_once("Manager.php");

$dev= new Developpeur(5,'SALIM','martin','martin@live.fr','06/54/57/89/32',125463.25,'PHP');
$manag =new Manager(1,'LAGHGAR','Jean','jean@gmail.com','03/20/40/30/20',3000,'Informatique');
// echo $dev;
// echo $manag;
echo $dev->afficher();
echo "----------------------------------------------------------------------\n";
$manag->afficher();
echo "----------------------------------------------------------------------\n";
echo "Vous avez créé ".Personne::$counter." personne(s)";