<?php

class Voiture implements JsonSerializable{
    private $marque;
  
    public function jsonSerialize()
    {
        get_object_vars($this);
    }
    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }
}