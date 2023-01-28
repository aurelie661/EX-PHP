<?php
include_once("Ouvrier.php");
include_once("Patron.php");
include_once("Cadre.php");

$ouvrier= new Ouvrier('720df5','Dupond','Pierre','03/05/1712',new DateTime('12/12/1990'));
$cadre= new Cadre('1654lkj254','Collins','steve','21/07/1998',1);
$patron=new Patron('1254gf5','Boutillier','Aurélie','26/11/1983',9);

// var_dump($ouvrier);

// var_dump($ouvrier->getSalaire());
echo "----------------------------------------------------------------------------------------------------------\n";
echo $ouvrier->afficher()."\n";
echo "----------------------------------------------------------------------------------------------------------\n";
echo $cadre->afficher()."\n";
echo "----------------------------------------------------------------------------------------------------------\n";
echo $patron->afficher()."\n";