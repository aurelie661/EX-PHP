<?php
include_once("Batiment.php");

class Maison extends Batiment{
    private $nBPieces;

    public function __construct(string $adresse, float $surperficie,int $nBPieces)
    {
        parent::__construct($adresse);
        // $this->adresse=$adresse;
        $this->setSuperficie($surperficie);
        $this->nBPieces=$nBPieces;


    }
        /**
         * Get the value of nBPieces
         */ 
        public function getNBPieces(): ?int
        {
                return $this->nBPieces;
        }

        /**
         * Set the value of nBPieces
         *
         * @return  self
         */ 
        public function setNBPieces(?int $nBPieces): self
        {
                $this->nBPieces = $nBPieces;

                return $this;
        }

        public function __toString()
    {
        return parent::__toString() ."\n[nBPieces] :".$this->nBPieces."\n";
    }
}




?>