<?php
include_once("Employe.php");

class Ouvrier extends Employe{

    private $dateDEntree;
    private static $smic =2500;


    public function __construct(string $matricule,string $nom,string $prenom,string $dateDeNaissance,DateTime $dateDEntree)
    {
        parent::__construct($matricule,$nom,$prenom,$dateDeNaissance);
        $this->dateDEntree=$dateDEntree;
        
    }
    public function getSalaire(): float{
        $today= new DateTime();
        $interval =$today->diff($this->dateDEntree);
        $nbAnnee=$interval->y;
        $salaire= self::$smic+($nbAnnee*100);
        if($salaire >(self::$smic *2)){
            return self::$smic *2;
        }
        else{
            return $salaire;
        }
    }

    public function afficher(): void{
        $dateString= $this->dateDEntree;
        $stringDate=$dateString->format('Y');
        echo"OUVRIER\nmatricule: N°".$this->matricule."\nNom: ".$this->nom."\nPrenom: ".$this->prenom.
        "\nnée le: ".$this->dateDeNaissance."\nsalaire => ".$this->getSalaire()." €\nEmbauche: ".$stringDate;
    }

    /**
     * Get the value of dateDEntree
     */ 
    public function getDateDEntree(): DateTime
    {
        return $this->dateDEntree;
    }

    /**
     * Set the value of dateDEntree
     *
     * @return  self
     */ 
    public function setDateDEntree(DateTime $dateDEntree)
    {
        $this->dateDEntree = $dateDEntree;

        return $this;
    }
    // public function __toString()
    // {
    //     return "".$this->matricule." ".$this->nom." ".$this->prenom." ".$this->dateDeNaissance." ".$this->dateDEntree;
    // }
}