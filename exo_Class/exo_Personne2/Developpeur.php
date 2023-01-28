<?php
include_once ("Personne.php");

class Developpeur extends Personne{

    private $specialite;

    public function __construct(int $id,string $nom,string $prenom,string $mail,string $telephone,float $salaire,string $specialite)
    {
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($mail);
        $this->setTelephone($telephone);
        $this->setSalaire($salaire);
        parent::$counter++;
        $this->specialite=$specialite;
    }
    public function calculerSalaire(): float
    {
        return $this->salaire*1.2;
    }

    public function afficher(): string{
        return "Le salaire du développeur ".$this->nom." ".$this->prenom." est : ".$this->calculerSalaire()."€, sa spécialité : ".$this->specialite."\n";
    }

        /**
         * Get the value of specialite
         */ 
        public function getSpecialite(): ?string
        {
                return $this->specialite;
        }

        /**
         * Set the value of specialite
         *
         * @return  self
         */ 
        public function setSpecialite(?string $specialite)
        {
                $this->specialite = $specialite;

                return $this;
        }
}