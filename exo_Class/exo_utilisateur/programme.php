<?php
include_once("Profil.php");
include_once("Utilisateur.php");


$profil1= new Profil(1,'cp','Chef de projet');
$profil2= new Profil(2,'mn','Manager');
$profil3= new Profil(3,'dp','Directeur de projet');
$profil4= new Profil(4,'drh','Directeur des ressources humaines');
$profil5= new Profil(5,'dg','Directeur général');


$user1= new Utilisateur(1,'BOU','ALICE','alice@gmail.fr','06-46-54-65-43',
                        13545.65,'aali_ce','******','direction',$profil2);
$user2= new Utilisateur(2,'BOUTILLIER','AURELIE','LILI@gmail.fr','06-28-85-36-43',
                        35214.21,'lili__','******','direction',$profil5);
$user3= new Utilisateur(3,'DUPOND','MIREILLE','mimi@gmail.fr','06-14-47-36-63',
                        4521.21,'__mimi','******','direction',$profil1);
echo"________________________________________________\n";

echo $user1->afficher()."\n\n";
echo $profil2->afficher()."\n";
echo"________________________________________________\n";

echo $user2->afficher()."\n\n";
echo $profil5->afficher()."\n";
echo"________________________________________________\n";

echo $user3->afficher()."\n\n";
echo $profil1->afficher()."\n";
echo"________________________________________________\n";
