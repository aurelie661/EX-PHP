<?php
include_once('Voiture.php');
include_once('Modele.php');


$voiture1 = new Voiture();
$voiture1->setMarque("peugeot");

$voiture2 = new Voiture();
$voiture2->setMarque("renault");

$voiture3 = new Voiture();
$voiture3->setMarque("mercedes");

$voiture4 = new Voiture();
$voiture4->setMarque("seat");

$voiture5 = new Voiture();
$voiture5->setMarque("opel");

$voitures = [$voiture1, $voiture2, $voiture3, $voiture4, $voiture5];
if (isset($_GET['marque'])) {
    $marquePeugeot1 = new Modele("peugeot", "206");
    $marquePeugeot2 = new Modele("peugeot", "207");
    $marquePeugeot3 = new Modele("peugeot", "208");
    $marqueRenault1 = new Modele("renault", "captur");
    $marqueRenault2 = new Modele("renault", "espace");
    $marqueRenault3 = new Modele("renault", "twingo");
    $marqueMercedes1 = new Modele("mercedes", "classA");
    $marqueMercedes2 = new Modele("mercedes", "eqa");
    $marqueMercedes3 = new Modele("mercedes", "glc");
    $marqueSeat1 = new Modele("seat", "ibiza");
    $marqueSeat2 = new Modele("seat", "leon");
    $marqueSeat3 = new Modele("seat", "arona");
    $marqueOpel1 = new Modele("opel", "astra");
    $marqueOpel2 = new Modele("opel", "crossland x");
    $marqueOpel3 = new Modele("opel", "corsa");

    $marques = [
        $marquePeugeot1,
        $marquePeugeot2,
        $marquePeugeot3,
        $marqueRenault1,
        $marqueRenault2,
        $marqueRenault3,
        $marqueMercedes1,
        $marqueMercedes2,
        $marqueMercedes3,
        $marqueSeat1,
        $marqueSeat2,
        $marqueSeat3,
        $marqueOpel1,
        $marqueOpel2,
        $marqueOpel3
    ];

    $marqueSelectionner = [];
    foreach ($marques as $modele) {
        if ($modele->getMarque() == $_GET['marque']) {
            array_push($marqueSelectionner, $modele);
        }
    }
    echo json_encode($marqueSelectionner);
} else {
    echo json_encode($voitures);
}