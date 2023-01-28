<?php
include_once ("Personne.php");

class Manager extends Personne{

    private $service;

    public function __construct(int $id,string $nom,string $prenom,string $mail,string $telephone,float $salaire,string $service)
    {
        $this->setId($id);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($mail);
        $this->setTelephone($telephone);
        $this->setSalaire($salaire);
        parent::$counter++;
        $this->service=$service;
    }
    public function calculerSalaire(): float
    {
        return $this->salaire*1.35;
    }

    public function afficher(): void{
        echo "Le salaire du manager ".$this->nom." ".$this->prenom." est : ".$this->salaire."€, son service : ".$this->service."\n";
    }

        /**
         * Get the value of service
         */ 
        public function getService(): ?string
        {
                return $this->service;
        }

        /**
         * Set the value of service
         *
         * @return  self
         */ 
        public function setService(?string $service)
        {
                $this->service = $service;

                return $this;
        }
}