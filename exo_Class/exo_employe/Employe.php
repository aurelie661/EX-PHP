<?php

abstract class Employe{
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected $dateDeNaissance;
     
    
    public abstract function getSalaire(): float;

    public function __construct(string $matricule,string $nom,string $prenom,string $dateDeNaissance)
    {
        $this->matricule=$matricule;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateDeNaissance=$dateDeNaissance;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule(?string $matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(?string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom():string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom(?string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateDeNaissance
     */ 
    public function getDateDeNaissance(): string
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set the value of dateDeNaissance
     *
     * @return  self
     */ 
    public function setDateDeNaissance(?string $dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    // public function __toString()
    // {
    //     return "".$this->matricule." ".$this->nom." ".$this->prenom." ".$this->dateDeNaissance;
    // }
}