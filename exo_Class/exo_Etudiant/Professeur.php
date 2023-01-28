<?php
include_once("Employe.php");

class Professeur extends Employe{
    private $specialite;

    public function __construct(string $nom, string $prenom,float $salaire,string $specialite)
    {
        parent::__construct($nom,$prenom,$salaire);
        $this->specialite=$specialite;
    }

    /**
     * Get the value of specialite
     */ 
    public function getSpecialite(): ? string
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite(?string $specialite): Professeur
    {
        $this->specialite = $specialite;

        return $this;
    }

    function __toString()
    {
        return "Je suis " . parent::getNom() . " " . parent::getPrenom() . " mon salaire est de: " . parent::getSalaire() . "€ ma spécialité est: " . $this->specialite."\n";
    }
}