<?php
include_once("Personne.php");

class Utilisateur extends Personne{

    private $login;
    private $password;
    private $service;
    private Profil $profil;

    public function __construct(int $id,
                                string $nom,
                                string $prenom,
                                string $mail,
                                string $telephone,
                                float $salaire,
                                string $login,
                                string $password,
                                string $service,
                                Profil $profil)
    {
        parent::__construct($id,$nom,$prenom,$mail,$telephone,$salaire);
        $this->login=$login;
        $this->password=$password;
        $this->service=$service;
        $this->profil=$profil;
    }

    public function calculerSalaire(): float{
        if($this->profil->getCode() == "mn"){
             return $this->salaire*1.1;
        }
        elseif($this->profil->getCode() == "dg"){
            return $this->salaire*1.4;
        }
        else{
            return $this->salaire; 
        }
         
    }

    public function afficher(): void{
        echo"Information de l'utilisateur:\n\nID: ".$this->id."\nNOM: "
        .$this->nom."\nPRENOM: ".$this->prenom."\nMAIL: ".$this->mail.
        "\nTELEPHONE: ".$this->telephone."\nSALAIRE: ".$this->calculerSalaire();
    }
    
    /**
     * Get the value of login
     */ 
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin(?string $login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword(?string $password)
    {
        $this->password = $password;

        return $this;
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

    /**
     * Get the value of profil
     */ 
    public function getProfil(): Profil
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil(Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }
}