<?php
class Batiment{

    private $adresse;
    private $surperficie;

    public function __construct(string  $adresse)
    {
        $this->adresse=$adresse;
    }

    public function getAdresse(): string{
        return $this->adresse;
    }
    public function setAdresse(?string $adresse): Batiment{
        $this->adresse=$adresse;
        return $this;
    }
    
    public function getSuperficie(): ?float{
        return $this->surperficie;
    }
    public function setSuperficie(?float $surperficie): Batiment{
        $this->superficie=$surperficie;
        return $this;
    }

    public function __toString()
    {
        return"[Adresse]: ".$this->adresse."\n[superficie]: " . $this->superficie;
    }
}



?>