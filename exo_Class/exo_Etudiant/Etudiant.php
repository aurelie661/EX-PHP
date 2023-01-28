<?php
include_once("Personne.php");

class Etudiant extends Personne{
    private $cne;


    public function __construct(string $nom, string $prenom,string $cne)
    {
        parent::setNom($nom);
        parent::setPrenom($prenom);
        $this->cne=$cne;
    }

    /**
     * Get the value of cne
     */ 
    public function getCne(): ?string
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne(?string $cne):Etudiant
    {
        $this->cne = $cne;

        return $this;
    }

    function __toString()
    {
        return "Je suis " . $this->getNom() . " " . parent::getPrenom() . " mon CNE est: " . $this->cne."\n";
    }
}