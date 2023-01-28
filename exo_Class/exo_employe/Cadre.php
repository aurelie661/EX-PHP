<?php
include_once("Employe.php");

class Cadre extends Employe{

    protected $indice;

    public function __construct(string $matricule,string $nom,string $prenom,string $dateDeNaissance,int $indice)
    {
        parent::__construct($matricule,$nom,$prenom,$dateDeNaissance);
        $this->indice=$indice;
    }
    


    public function getSalaire(): float{
        // if($this->indice == 1){
        //     return $salaire=13000;
        // }                                    //premiere façon
        // else if($this->indice == 2){
        //     return $salaire=15000;
        // }
        // else if($this->indice == 3){
        //     return $salaire=17000;
        // }
        // else{
        //     return $salaire=20000;
        // }
        switch($this->indice){
            case 1:
                return 13000;
            case 2:
                return 15000;
            case 3:
                return 17000;
            case 4:
                return 20000;
            default:
                return 0;
        }
    }

    public function afficher(): void{
        echo"CADRE\nmatricule: N°".$this->matricule."\nNom: ".$this->nom."\nPrenom: ".$this->prenom.
        "\nnée le: ".$this->dateDeNaissance."\nsalaire => ".$this->getSalaire()." €\nN° d'indice de salaire: ".$this->indice;
    }

    /**
     * Get the value of indice
     */ 
    public function getIndice(): ?float
    {
        return $this->indice;
    }

    /**
     * Set the value of indice
     *
     * @return  self
     */ 
    public function setIndice(?float $indice)
    {
        $this->indice = $indice;

        return $this;
    }
    // public function __toString()
    // {
    //     return "".$this->matricule." ".$this->nom." ".$this->prenom." ".$this->dateDeNaissance." ".$this->indice;
    // }
}