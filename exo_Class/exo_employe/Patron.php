<?php
include_once("Employe.php");

class Patron extends Employe{

    
    private $pourcentage;
    private static $cA= 9546213.98;

    public function __construct(string $matricule,string $nom,string $prenom,string $dateDeNaissance,int $pourcentage)
    {
        parent::__construct($matricule,$nom,$prenom,$dateDeNaissance);
        $this->pourcentage=$pourcentage;
    }

    public function getSalaire(): float{
        if($this->pourcentage != null){
            return self::$cA*$this->pourcentage/100;
        }
        else{
            return 0;
        }
         
    }

    public function afficher(): void{
        echo"PATRON\nmatricule: N°".$this->matricule."\nNom: ".$this->nom."\nPrenom: ".$this->prenom.
        "\nnée le: ".$this->dateDeNaissance."\nPourcentage salaire: ".$this->pourcentage."%\nsalaire => ".$this->getSalaire()." €";
    }

    /**
     * Get the value of cA
     */ 
    public function getCA(): ?float
    {
        return $this->cA;
    }

    /**
     * Set the value of cA
     *
     * @return  self
     */ 
    public function setCA(?float $cA)
    {
        $this->cA = $cA;

        return $this;
    }
}