<?php
// include_once("Personne.php");
include_once("Utilisateur.php");

class Profil{

    private $id;
    private $code;
    private $libelle;

    private static $counter=0;

    public function __construct(int $id,string $code,string $libelle)
    {
        $this->id=$id;
        $this->code=$code;
        $this->libelle=$libelle;
    }

    public function afficher(): void{
        echo"Information du profil:\n\nID: ".$this->id."\nCODE: ".$this->code.
        "\nLIBELLE: ".$this->libelle;
    }
    /**
     * Get the value of code
     */ 
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode(?string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle(?string $libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}