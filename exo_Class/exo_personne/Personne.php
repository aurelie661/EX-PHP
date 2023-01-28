<?php
class Personne 
{

    private $nom;
    private $prenom;
    private $anneeDeNaissance;

    public function __construct($nom,$prenom,$anneeDeNaissance)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->anneeDeNaissance=$anneeDeNaissance;
    }
    
    public function getNom(): string{
        return $this->nom;
    }
    public function getPrenom(): string{
        return $this->prenom;
    }
    public function getAnnee(): string{
        return $this->anneeDeNaissance;
    }
    public function setNom($n): void{
        $this->nom=$n;
    }
    public function setPrenom($p): void{
        $this->prenom=$p;
    }
    public function setAnnee($a): void{
        $this->anneeDeNaissance=$a;
    }

}
